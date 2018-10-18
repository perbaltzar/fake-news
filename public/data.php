<?php
declare(strict_types=1);
//The collection of data. Arrays and such

$newsPosts = [
  [
    'title' => 'Headline',
    'author' => 'Per',
    'content' => file_get_contents(__DIR__.'/articles/article1.txt'),
    'publishDate' => '2018-10-17',
    'likeCounter' => 0,
    'contentIMG' => 'link'
  ],
  [
    'title' => 'Headline 2',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article2.txt'),
    'publishDate' => '2018-10-18',
    'likeCounter' => 2,
    'contentIMG' => 'link'
  ]
  ,
  [
    'title' => 'Headline 3',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article3.txt'),
    'publishDate' => '2018-10-18',
    'likeCounter' => 2,
    'contentIMG' => 'link'
  ]
  ,
  [
    'title' => 'Headline 4',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article4.txt'),
    'publishDate' => '2018-10-18',
    'likeCounter' => 2,
    'contentIMG' => 'link'
  ]
];
$authors = [
  ['name' => 'Nils',
  'imgURL' => 'link'
  ],
  ['name' => 'Per',
  'imgURL' => 'link'
  ],
];
