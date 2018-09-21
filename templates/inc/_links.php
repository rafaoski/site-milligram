<?php namespace ProcessWire;

// Show Home page Children
echo pageChildren(
    pages(1),
    [
    'limit'=> 12,
    //  'random' => true
    ]
);

// Get Children News
echo pageChildren(
    page()->opt['newsPage'],
    [
    'txt' => page()->ts['lastNews'],
    'limit' => 5,
    // 'random' => true
    ]
);

// Get Children About
echo pageChildren(
    page()->opt['aboutPage'],
    [
    'txt' => page()->ts['aboutUs']
    ]
);
