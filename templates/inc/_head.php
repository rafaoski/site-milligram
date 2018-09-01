<?php namespace ProcessWire;?>
<!DOCTYPE html>
<html lang='<?=page()->opt['l_pref'];?>' prefix="og: http://ogp.me/ns#">
<head id='html-head'>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?=page()->opt['favicon_url'];?>"/>
	<title id='html-title'><?=page('headline|title');?></title>
	<meta name="description" content="<?=page()->summary;?>">
<?php // Smart Seo
echo smartSeo(page());
// Lang tag
echo linkTag(pages('/'),$page);?>

    <!-- BASIC STYLESHEET -->
    <link rel="stylesheet" href="<?=page()->opt['app_css'];?>"/>

   <!-- CUSTOM STYLE -->
   <style id='head-style'>
    /* Simple Honeypot Contact Form */
        .hide-robot {
            display: none;
        }
        
        /* eliminate horizontal scrollbars */
        .grid {
                margin-right: auto;
                margin-left: auto;
            }
    </style>

<?=gwCode(page()->opt['verification_code']);?>
</head>

<body id='html-body' class='<?=page()->template?>'>

<!-- MASTHEAD -->
<header id='header'>

	<!-- NAV MENU -->
	<nav id='main-menu' class='grid container-medium'>

     <?php  // Some Options
        echo burgerNav(pages('/'),
         [  
            'logo_url' => page()->opt['logo_url'],
		 // Show Site Name if logo_url is uncomment
            'alt' => page()->ts['logo_alt'],
			'brand' => page()->opt['s_name'],
         ]
     )?>

	</nav>

	<!-- BREADCRUMBS -->
	<div id='breadcrumbs' class='bcrumbs container-fluid'>

        <?=breadCrumb(page())?>

	</div>

</header>