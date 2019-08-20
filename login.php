<!doctype html>
<html class="bx--body" lang="">

<head>
    <meta charset="utf-8">
    <title>LDAP Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://unpkg.com/carbon-components@10.5.1/css/carbon-components.min.css">
    <link rel="stylesheet" href="https://unpkg.com/blueprint-css@3.1.1/dist/blueprint.min.css"/>
    <link rel="stylesheet" href="style.css"/>

    <style>
        html, body {
            background-color: #333 !important;
            min-height: 100vh;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login {
            background-color: #fffffffa;
            border: 3px solid #0062ff;
        }

        .login-error {
            border-color: #fb4b53;
        }

        .bx--inline-notification {
            max-width: unset;
        }
    </style>
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->


<div bp="container">

    <section data-notification class="bx--inline-notification bx--inline-notification--error" role="alert">
        <div class="bx--inline-notification__details">
            <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;"
                 xmlns="http://www.w3.org/2000/svg" class="bx--inline-notification__icon" width="20" height="20"
                 viewBox="0 0 20 20" aria-hidden="true">
                <path d="M10 1c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9zm3.5 13.5l-8-8 1-1 8 8-1 1z"></path>
                <path d="M13.5 14.5l-8-8 1-1 8 8-1 1z" data-icon-path="inner-path" opacity="0"></path>
            </svg>
            <div class="bx--inline-notification__text-wrapper">
                <p class="bx--inline-notification__title">Invalid credentials</p>
                <p class="bx--inline-notification__subtitle">Subtitle text goes here.</p>
            </div>
        </div>
        <button data-notification-btn class="bx--inline-notification__close-button" type="button" aria-label="close">
            <svg focusable="false" preserveAspectRatio="xMidYMid meet" style="will-change: transform;"
                 xmlns="http://www.w3.org/2000/svg" class="bx--inline-notification__close-icon" width="16" height="16"
                 viewBox="0 0 16 16" aria-hidden="true">
                <path d="M12 4.7l-.7-.7L8 7.3 4.7 4l-.7.7L7.3 8 4 11.3l.7.7L8 8.7l3.3 3.3.7-.7L8.7 8z"></path>
            </svg>
        </button>
    </section>


    <section class="login" bp="padding--lg">
        <h1 class="bx--type-productive-heading-04">Login</h1>

        <p class="bx--type-body-long-02" bp="margin-top--lg">Please enter your LDAP credentials below.</p>

        <p class="bx--type-body-long-02" bp="margin-top--lg">Lorem ipsum dolor sit amet, verear petentium dissentiet ei
            eum. Essent viderer sed ea, et esse detraxit usu. In pri zril suscipit inimicus. Mea in iusto mentitum
            laboramus, quas iriure temporibus eu vim.</p>

        <form action="check.php" method="post">
            <div class="bx--form-item" bp="margin-top--lg">
                <label for="username" class="bx--label">Username</label>
                <input id="username" type="text" class="bx--text-input" name="username" placeholder="username">
            </div>
            <div class="bx--form-item" bp="margin-top--lg">
                <label for="password" class="bx--label">Password</label>
                <input id="password" type="password" class="bx--text-input" name="password" placeholder="password">
            </div>
            <div class="bx--form-item" bp="margin-top--lg">
                <button class="bx--btn bx--btn--primary" type="button">Submit</button>
            </div>
        </form>
    </section>

</div>


<script src="https://unpkg.com/carbon-components/scripts/carbon-components.min.js"></script>

</body>

</html>