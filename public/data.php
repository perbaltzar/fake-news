<?php
declare(strict_types=1);
//Defining variable
$openArticle = 0;
$isReading = false;
if (isset($_GET['isReading'])){
  $isReading = $_GET['isReading'];
}


//The collection of data. Arrays and such

$newsPosts = [
  [
    'title' => 'Headless Chicken',
    'author' => 'Per',
    'content' => file_get_contents(__DIR__.'/articles/article1.txt'),
    'publishDate' => '2018-10-17',
    'likeCounter' => 6,
    'contentIMG' => 'http://yjblog.stupidchicken.com/images/chickenvsmike.png',
    'articleID' => 1
  ],
  [
    'title' => 'Origin of the Universe',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article2.txt'),
    'publishDate' => '2018-10-19',
    'likeCounter' => 1,
    'contentIMG' => 'https://i.chzbgr.com/full/6137367552/h9DEE12CD/',
    'articleID' => 2
  ]
  ,
  [
    'title' => 'Area Man Thankful To Be Single During Golden Age Of Television',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article3.txt'),
    'publishDate' => '2018-10-17',
    'likeCounter' => 2,
    'contentIMG' => 'https://dp.la/api/files/original/b7651464ce79df04e223cf392e68ea8f.jpg',
    'articleID' => 3
  ]
  ,
  [
    'title' => '104-Year-Old Reveals Secret To Long Life Being Cursed By Witch To Wander Earth Eternally',
    'author' => 'Nils',
    'content' => file_get_contents(__DIR__.'/articles/article4.txt'),
    'publishDate' => '2018-10-18',
    'likeCounter' => 10,
    'contentIMG' => 'https://i.kinja-img.com/gawker-media/image/upload/s--iI26gvpB--/c_scale,f_auto,fl_progressive,q_80,w_800/ulcb7kpxnb9kfxtcchpz.jpg',
    'articleID' => 4
  ]
  ,
  [
    'title' => 'Trump Announces He’ll Pay Legal Fees Of Any Rally Attendee Who Beats Up Ted Cruz',
    'author' => 'Erik',
    'content' => file_get_contents(__DIR__.'/articles/article5.txt'),
    'publishDate' => '2018-10-20',
    'likeCounter' => 10,
    'contentIMG' => 'https://8bnztmont6-flywheel.netdna-ssl.com/wp-content/uploads/2016/03/tedcruz.jpg',
    'articleID' => 5
  ]
  ,
  [
    'title' => 'Luke, Owen Wilson Recall Meeting On Set Of ‘The Royal Tenenbaums’',
    'author' => 'Hanna',
    'content' => file_get_contents(__DIR__.'/articles/article6.txt'),
    'publishDate' => '2018-09-29',
    'likeCounter' => 15,
    'contentIMG' => 'https://i.kinja-img.com/gawker-media/image/upload/s--seVZhAFh--/c_scale,f_auto,fl_progressive,q_80,w_800/notzfhuc3wquuxx23xls.jpg',
    'articleID' => 6
  ],
  [
    'title' => 'Vincent Kidnappad?',
    'author' => 'Lovisa',
    'content' => file_get_contents(__DIR__.'/articles/article7.txt'),
    'publishDate' => '2018-10-02',
    'likeCounter' => 900,
    'contentIMG' => 'https://i.ytimg.com/vi/YisHiII3Jls/maxresdefault.jpg',
    'articleID' => 7
  ],
  [
    'title' => 'Vincents Hemligheter',
    'author' => 'Lovisa',
    'content' => file_get_contents(__DIR__.'/articles/article8.txt'),
    'publishDate' => '2018-10-04',
    'likeCounter' => 900,
    'contentIMG' => 'https://i.ytimg.com/vi/0Nvz7RGidBE/maxresdefault.jpg',
    'articleID' => 8
  ]
  ,
  [
    'title' => 'Vincent i St Tropez?',
    'author' => 'Charmaine',
    'content' => file_get_contents(__DIR__.'/articles/article9.txt'),
    'publishDate' => '2018-10-07',
    'likeCounter' => 900,
    'contentIMG' => 'https://qpr2l7.imagenii.com/static1.seesainttropez.com/image_uploader/photos/e4/large/where-to-stay-in-saint-tropez-with-friends.jpg?f=q(v=.8)&auth=92db279fc2264a0f42037a965f5a771dd652df27',
    'articleID' => 8
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
