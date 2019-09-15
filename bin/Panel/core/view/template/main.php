<!DOCTYPE html>
<html lang="<?php echo $this->lang ?>">
    <head>
        <meta charset="utf-8">
        <meta name="google" content="notranslate">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $this->lt['title'] ?><?php echo $this->title ?></title>
        <link rel="icon" href="/panel/favicon.ico">
        <link rel="stylesheet" href="/panel/icon/font.css">
        <link rel="stylesheet" href="/panel/main.css"><?php echo $this->head . PHP_EOL ?>
    </head>
    <body>
        <div id="header">
            <div class="container">
                <div class="left"><?php echo $this->logo ?></div>
                <div class="right"><a href="/logout<?php echo $this->ext ?>"><i class="icon-logout"></i><?php echo $this->lt['sign_out-upp'] ?></a></div><?php echo $this->langs . PHP_EOL ?>
                <div class="right"><a href="/personal<?php echo $this->ext ?>"><i class="icon-dot-3"></i><i class="icon-user"></i></a></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="container"><?php echo $this->route ?><?php echo $this->content . PHP_EOL ?>
        </div>
    </body>
</html>
