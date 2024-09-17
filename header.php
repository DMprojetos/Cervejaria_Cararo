<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3FJJCZGQ0"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-Q3FJJCZGQ0');
        </script>

        <?php wp_head(); ?>
    </head>
    <body id="blog" <?php body_class(); ?>>
		<?php wp_body_open(); ?>
        <div class="page-wrap">
			<?php get_template_part( 'template-parts/template-part', 'topnav' ); ?>
