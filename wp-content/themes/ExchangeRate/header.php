<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4U</title>

    <?php wp_head();?>

</head>
<body>
<header>
    <div class="logo">
	    <?php the_custom_logo();?>
    </div>
    <div class="contact-info">

        <?php echo do_shortcode('[gtranslate default_lang="en"]'); ?>


        <div class="phone">
            <i class="fas fa-phone"></i>
            <a class="phone" href="tel:<?php the_field('phone_number');?>"><?php the_field('phone');?></a>
        </div>
        <div class="social-media">
<!--            <a href="#"><i class="fab fa-facebook"></i></a>-->
            <a href="<?php the_field( 'instagram_link' ); ?>"><i class="fab fa-instagram"></i></a>
            <a href="<?php the_field('telegram_link');?>"><i class="fab fa-telegram"></i></a>
        </div>
    </div>
</header>