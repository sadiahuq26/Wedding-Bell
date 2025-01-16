<?php include('config/constants.php') ?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Bell</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo1.png" alt="weddingBell Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Latest Work</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>client.php">Clients</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>register.php">Registration</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>