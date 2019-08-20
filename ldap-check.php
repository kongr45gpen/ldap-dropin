<?php

$config = [];
require_once __DIR__ . '/ldap-config.php';


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldapConn = ldap_connect($config['server']);
    ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
    $ldapBind = ldap_bind($ldapConn, $config['admin-rdn'], $config['admin-password']);

    // Search for a person with the given uid
    $escapedUsername = ldap_escape($username, "", LDAP_ESCAPE_FILTER);
    $attributes = [$config['username-attribute']];
    $filter="(" . $config['username-attribute'] . "=$escapedUsername)";
    $sr = ldap_search($ldapConn, $config['base-dn'], $filter, $attributes);
    $info = ldap_get_entries($ldapConn, $sr);

    if ($info['count'] == 0 && substr_compare($username, $config['base-dn'], -strlen($config['base-dn'])) === 0) {
        // Search username as dn
        $sr = ldap_read($ldapConn, $username, '(objectClass=*)', $attributes);
        $info = ldap_get_entries($ldapConn, $sr);
    }

    $htmlUsername = htmlspecialchars(substr($username, 0, 50));

    if (!isset($info[0])) {
        $error = "Could not find user with username $htmlUsername";
    } else {
        $user = $info[0];

        // Try to bind as this user
        $ldapBind = @ldap_bind($ldapConn, $user['dn'], $password);

        if (!$ldapBind) {
            $error = "Invalid password for user $htmlUsername";
        } else {
            $success = true;
        }
    }

    if (isset($error)) {
        require __DIR__ . '/ldap-login.php';
    } else if (isset($success) && $success === true) {
        header('Location: ..');
    }
}