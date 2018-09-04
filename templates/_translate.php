<?php namespace ProcessWire;

// Translate Strings
page()->ts = [

// Language => locale / code prefx
'locale' => _x('en_US', 'HTML locale code'),
'languageCode' => _x('en', 'HTML language code'),

// Main Page ( main.php )
'siteName' => page()->opt['optionsPage']->headline ?: __('Your Site Name'),
'logoAlt' => __('Show My Awesome Logo'),

// Last News 
'lastNews' => __('Last News'),

// About US
'aboutUs' => __('About Us'),

// Basic
'readMore' => __('Read More &raquo;'),
'morePages' => __('More Pages'),
'search' => __('Search'),
'recent' =>  __('Recent Posts'),

// BASIC PAGINATION
'prev' => __('&laquo; Previous'),
'next' => __('Next &raquo;'),

// Search Page ( search.php )
'foundMatches' => __("Found %d page(s)."),
'noResults' => __('Sorry, no results were found.'),

// Hero ( home.php )
'heroTxtFirst' => __('A friendly and powerful open source CMS'),
'heroTxtNext' => __('Processwire'),
'heroTxtLast' => __('With an exceptionally strong API -- '),
'addHero' => __('Add Hero Text'),

// Grid ( grid.php )
'wow' => __(' PROCESSWIRE WOW!!!'),

// Contact Form
'contactUs' => __('Contact Us'),
'labelName' => __('Name'),
'labelEmail' => __('E-Mail'),
'labelMessage' => __('Some Message'),
'labelSuccess' => __('Success !!! Your message has been sent'),
'somethingWrong' => __('Something Wrong !!! Try it again'),
'fillFields' => __('Fill the fields correctly !!!'),
'submit' => __('Submit'),
'reset' => __('Reset'),
'showForm' => __('Show Form'),
'mailSubject' => __('Mail Subject'),
'labelAccept' => __('By submitting a query, you accept'),
'labelPrivacy' => __('privacy policy'),

// Footer ( footer.php )
'poweredBy' => __('Powered by ProcessWire CMS'),
'editPage' => __('Edit Page'),
'privacyMessage' => __('Privacy & Cookies Policy. This website uses cookies to ensure you get the best experience on our website.'),
'goIt' => __('Got it!'),
'learnMore' => __('Learn More'),

];