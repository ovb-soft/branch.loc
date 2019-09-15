<!DOCTYPE html>
<html lang="<?php echo $this->lang ?>">
    <head>
        <meta charset="utf-8">
        <meta name="google" content="notranslate">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $this->lt['title'] ?></title>
        <link rel="icon" href="/panel/favicon.ico">
        <link rel="stylesheet" href="/fontello/css/fontello.css">
        <link rel="stylesheet" href="/panel/main.css">
        <link rel="stylesheet" href="/panel/login.css">
    </head>
    <body>
        <div id="header">
            <div class="container">
                <div class="left"><div class="logo"></div></div>
                <div class="right"><a href="/logout<?php echo $this->ext ?>"><i class="icon-logout"></i><?php echo $this->lt['sign_out-upp'] ?></a></div><?php echo $this->langs . PHP_EOL ?>
                <div class="clear"></div>
            </div>
        </div>
        <div class="container">
            <div id="route">
                <p><span>&#187;</span><?php echo $this->lt['route'] ?></p>
                <div class="clear"></div>
            </div>
            <form action="<?php echo $this->request ?>" method="post">
                <p class="name"><?php echo $this->lt['mail'] ?></p>
                <p class="input">
                    <input type="text" name="mail" placeholder="<?php echo $this->lt['mail_ph'] ?>" value="<?php echo $this->hl['mail'] ?>">
                </p>
                <p class="name"><?php echo $this->lt['pass'] ?></p>
                <p class="input">
                    <input type="text" name="pass" placeholder="<?php echo $this->lt['pass_ph'] ?>" value="<?php echo $this->hl['pass'] ?>">
                </p><?php echo $this->hl['wg'] . PHP_EOL ?>
                <div class="button double">
                    <p><button id="button" type="submit" name="login"><?php echo $this->lt['sign_in-upp'] ?></button></p>
                </div>
            </form>
        </div>
    </body>
</html>
