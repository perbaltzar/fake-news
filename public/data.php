<?php
declare(strict_types=1);
//The collection of data. Arrays and such

$newsPosts = [
  [
    'title' => 'Headline',
    'author' => 'Per',
    'content' => file_get_contents(__DIR__.'/articles/article1.txt'),
    'publishDate' => '2018-10-17',
    'likeCounter' => 6,
    'contentIMG' => 'link'
  ],
  [
    'title' => 'Headline 2',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article2.txt'),
    'publishDate' => '2018-10-19',
    'likeCounter' => 1,
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
    'likeCounter' => 10,
    'contentIMG' => 'link'
  ]
  ,
  [
    'title' => 'Headline 5',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article5.txt'),
    'publishDate' => '2018-10-20',
    'likeCounter' => 10,
    'contentIMG' => 'link'
  ]
  ,
  [
    'title' => 'Headline 6',
    'author' => 'Hanna',
    'content' => file_get_contents(__DIR__.'/articles/article6.txt'),
    'publishDate' => '2018-09-29',
    'likeCounter' => 15,
    'contentIMG' => 'link'
  ]
];
$authors = [
  ['firstname' => 'Nils',
  'lastname' => 'Nathorst-Windahl',
  'imgURL' => 'authors/nils.png'
  ],
  ['firstname' => 'Per',
  'lastname' => 'Baltzar',
  'imgURL' => 'authors/per.png'
  ],
  ['firstname' => 'Hanna',
  'lastname' => 'Ell',
  'imgURL' => 'authors/hanna.png'
  ],
  ['firstname' => 'Erik',
  'lastname' => 'Arvidsson',
  'imgURL' => 'authors/erik.png'
  ],
  ['firstname' => 'Adrian',
  'lastname' => 'Jungnelius',
  'imgURL' => 'authors/adrian.png'
  ],
  ['firstname' => 'Lovisa',
  'lastname' => 'Hallgren',
  'imgURL' => 'authors/lovisa.png'
  ],
  ['firstname' => 'Charmaine',
  'lastname' => 'Wang',
  'imgURL' => 'authors/charmaine.png'
  ],
  ['firstname' => 'Mattias',
  'lastname' => 'Rådemar',
  'imgURL' => 'authors/mattias.png'
  ],
];
