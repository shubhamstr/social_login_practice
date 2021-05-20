<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="appleid-signin-client-id" content="[CLIENT_ID]">
    <meta name="appleid-signin-scope" content="[SCOPES]">
    <meta name="appleid-signin-redirect-uri" content="[REDIRECT_URI]">
    <meta name="appleid-signin-state" content="[STATE]">
    <meta name="appleid-signin-nonce" content="[NONCE]">
    <meta name="appleid-signin-use-popup" content="true"> <!-- or false defaults to false -->

    <title>Document</title>
</head>

<body>

    <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in"></div>
    <script type="text/javascript"
        src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>


    <script>
    //Listen for authorization success
    document.addEventListener('AppleIDSignInOnSuccess', (data) => {
        //handle successful response
    });
    //Listen for authorization failures
    document.addEventListener('AppleIDSignInOnFailure', (error) => {
        //handle error.
    });
    </script>
</body>

</html>