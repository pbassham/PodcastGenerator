<?php
require "checkLogin.php";
require "../core/include_admin.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $config["podcast_title"]; ?> - Admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <br>
    <div class="container">
        <h1>Welcome to your Podcast Generator Admin Interface</h1>
    </div>
</body>

</html>