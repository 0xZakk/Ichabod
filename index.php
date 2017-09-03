<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <div id="page">
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <?php if (is_user_logged_in()): ?>
                    <ul class="menu">
                        <li>
                            <a href="<?php echo admin_url(); ?>">Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('edit.php'); ?>">Posts</a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('edit.php?post_type=page'); ?>">Pages</a>
                        </li>
                    </ul>
            <?php else: ?>
                <?php wp_login_form(); ?>
            <?php endif;?>
        </div>
    </div>
</body>
</html>