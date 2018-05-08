<!DOCTYPE html>
<html <?php language_attributes() ?>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<body <?php body_class() ?>>

<div>
    <header>
        <div class="nav_bar">
            <img class="nav_icon" src="images/troffo_icon.png">
            <button class="nav_button">Get Our App</button>
        </div>
    </header>
