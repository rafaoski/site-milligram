<?php namespace ProcessWire;

// as a convenience, set location of our 3rd party resources (Jquery)
urls()->set('jquery', 'wire/modules/Jquery/JqueryCore/JqueryCore.js');

// Custom options
page()->opt = [

/**
 *
 * Enable / Disable => Demo Image
 *
 */
'demoImage' => true,

/**
 *
 * Image Size
 *
 */
'thumbnail' => 180, // ./inc/user-info.php ( ./fields/img-thumb )

'small'     => 480, // blog.php, latest-posts.php, basic-page.php, category.php, tag.php ( ./fields/img-small )

'medium'    => 640, // blog.php, basic-page.php ( ./fields/img-medium )

'large'     => 1200, // ./inc/_head.php

/**
 *
 * Options Page => Do not change the options path !!! (/options/)
 * If you change the language, just change the only title ( Options ) ...
 * To change the title you have to go to the options template and select
 * the title field in which you have to change the presentation to visible from the input tab.
 * Now the title will appear on the options page ...
 *
 */
'optionsPage' => pages('/options/'), // Options Page

/**
 * 
 * Get Pages ( If you change the names of the pages, you should probably also rewrite those path names )
 * Like ( /news/ ) And the German version ( /nachrichten/ )
 * 
 */
'home' => pages()->get('/'), // Get Home Page

'newsPage' => pages('/news/'),  // Get News Page

'aboutPage' => pages('/about/'), // Get About Page

'contactPage' => pages('/contact/'), // Contact Page

'privacyPage' => pages('/privacy-policy/'), // Privacy Page

/**
 *
 * Options Header => ( ./_head.php )
 *
 */
// Logo url
'logoUrl' => urls()->templates . "dist/img/logo.png",

// Get Favicon
'faviconUrl' => urls()->templates . "dist/img/favicon.png",

// Get main CSS file
'appCss' => urls()->templates . "dist/app.css",

// Add Google Webmaster Verification Code https://kb.yoast.com/kb/how-to-connect-your-website-to-google-webmaster-tools/
'verificationCode' => '', // Paste Your Code

/**
 *
 * Smart SEO
 * Twitter Card 
 * https://cards-dev.twitter.com/validator
 *
 */
'smartSeo' => true, // Enable SEO
'cannonicalUrl' => '', // https://www.domain.com
// Twitter Card 
'enableTwitter' => true, // Enable Twitter Card 
'largeImage' => true,

/**
 *
 * Options Footer => ( ./_foot.php )
 *
 */
// Add Google Fonts
'googleFonts' => ['Roboto','Montserrat','Righteous'],

// Google Analytics Code
'gaCode' => '', // To Enable put Google Analytics Code

];