<?php namespace ProcessWire;
// Show Home page Children
echo pageChildren(pages(1),
[
    'limit'=> 12,
    //  'random' => true
]
);

// Get Children News
echo pageChildren(page()->opt['news_p'], 
[ 
    'txt' => page()->ts['last_news'],
    'limit' => 5,
    // 'random' => true 
]);

// Get Children About
echo pageChildren(page()->opt['about_p'], 
[ 
    'txt' => page()->ts['about_us'] 
]);