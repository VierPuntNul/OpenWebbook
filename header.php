<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
        <meta name="description" content="<?php echo site_description(); ?>" />
	<meta name="author" content="OpenWebbook.org" />
        <meta name="viewport" content="width=device-width"/>
	
	<meta name="generator" content="Anchor CMS">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo e(current_url()); ?>">
	<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">
 
        <script>var base = '<?php echo theme_url(); ?>';</script>
 
        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
 
	<link rel="shortcut icon" href="http://onepcssgrid.mattimling.com/assets/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo theme_url('/css/normalize.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo theme_url('/css/onepcssgrid.css'); ?>" />
        <link rel="stylesheet" href="<?php echo theme_url('/css/main.css'); ?>">

        <script src="<?php echo theme_url('/js/vendor/modernizr-2.6.2.min.js'); ?>"></script>
        
        <style>
		body {
			margin-top: 20px;
		}

		.col1, .col2, .col3, .col4, .col5, .col6, .col7, .col8, .col9, .col10, .col11, .col12 {
		    /*margin-bottom: 20px;*/
                    text-align: left;
		}
                
                .fullcol, .col1.default, .col2.default, .col3.default, .col4.default, .col5.default, .col6.default, .col7.default, .col8.default, .col9.default, .col10.default, .col11.default, .col12.default {
			background: #801255;
			color: #fff;
			margin-bottom: 20px;
			text-align: left;
			padding: 20px 0;
		}
                .onerow{
			clear: both;
                }
		
		.most-right{
			text-align: right;
		}
		.article{
			text-align: left;
		}
		.inline-block{
			display: inline-block;
		}

		@media all and (max-width: 768px) {
			
                        .fullrow{
                            margin-top: -80px;
                        }
		}

                
	</style>
        
        <?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
        
        
    </head>
    <body class="<?php echo body_class(); ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        
        
        
        <div class="onepcssgrid-1200">
		
			<header>
				<div class="onerow">
					<div class="col12 most-right last">
                                            <?php if(has_menu_items()): ?>
                                                <div class="mainmenu">
                                                                <?php while(menu_items()): ?>
                                                                        <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                                                                                <?php echo menu_name(); ?>
                                                                        </a>
                                                                <?php endwhile; ?>
                
                                                                <li class="tray">
                                                                        <a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
                                                                </li>
                                                </div>
                                            <?php endif; ?>
                                            
                                            
						<!--<div class="mainmenu">
							<a href="#" class="active">HOME</a>
							<a href="#">ABOUT</a>
							<a href="#">SOFTWARE</a>
							<a href="#">HARDWARE</a>
							<a href="#">PARTNERS</a>
							<a href="#">GITHUB</a>
							<a href="#">CONTACT</a>
						</div>-->
					</div>
				</div>
				<div class="onerow hero">
					<div class="col7">
						<span class="large">OpenWebbook</span>
						<h1 style="font-style: italic; font-family: 'Open Sans'; margin-top: 10px;">The Quest for an Open Webcentric OS for Secondary Devices.</h1>
					</div>
					<div class="col5 last">
						<img src="<?php echo theme_url('/img/notebook.png'); ?>" />
					</div>
				</div>
			</header>