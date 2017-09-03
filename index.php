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
        <?php if (wp_get_current_user()): ?>
            <div class="container">
                <h1><?php bloginfo('name'); ?></h1>
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
            </div>
        <?php else: ?>
            <?php wp_login_form(); ?>
        <?php endif;?>
    </div>
</body>
</html>