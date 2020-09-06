<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web app 1</title>
</head>
<body>
    <?php print_r($jwtDecoded) ?>
    <iframe id="oauthServer" src="<?php echo OAUTH_SERVER_EMBED; ?>"></iframe>
<script>
    window.addEventListener("message", function(event) {
        var isLogin = event.data["login"];
        console.log('isLogin: ' + isLogin);
    });
</script>
</body>
</html>