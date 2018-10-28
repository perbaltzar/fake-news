<?php
declare(strict_types=1);



//--------------------------------------------------------
//--------------------------------------------------------
//the functions of the show.
/**
* Returns articles with a specific author
* @param  array All the excisting articles
* @param  string name of the author
* @return array abn array with the chosen articles
*/
function selectByName(array $articles, string $name): array {
  $errorCounter = 0;
  foreach($articles as $article){
    if ($article['author'] !== $name){
      $errorCounter++;
    }
  }
  if ($errorCounter === count($articles))
  {
    $authorArticles = [
      [
        'title' => 'No article found',
        'author' => $name,
        'content' => '',
        'publishDate' => '',
        'likeCounter' => '',
        'contentIMG' => ''
      ]
    ];
  }
  else
  {
    $authorArticles = array_filter(($articles), function($article) use ($name) {
      return ($article['author'] === $name);
    });
  }
  return $authorArticles;
}

//--------------------------------------------------------
//--------------------------------------------------------
/**
* [orderByLikes description]
* @param  array  $data  The post to by sorted
* @return array         Sorted by likes
*/

function orderByLikes(array $data): array
{
  function compare($a, $b)
  {
    if ($a['likeCounter'] == $b['likeCounter']) {
      return 0;
    }
    return ($a['likeCounter'] > $b['likeCounter']) ? -1 : 1;
  }

  usort($data, "compare");
  return $data;
}
//--------------------------------------------------------
//--------------------------------------------------------
/**
* [orderByLikes description]
* @param  array  $data  The post to by sorted
* @return array         Sorted by date
*/
function orderByDate(array $data): array
{
  function compare($a, $b){
    $a_datenumber = strtotime($a['publishDate']);
    $b_datenumber = strtotime($b['publishDate']);
    if ($a_datenumber == $b_datenumber) {
      return 0;
    }
    return ($a_datenumber > $b_datenumber) ? -1 : 1;
  }

  usort($data, "compare");
  return $data;
}
//--------------------------------------------------------
//--------------------------------------------------------
/**
* [orderByLikes description]
* @param  array  $data  The post to by sorted
* @return array         Sorted by date
*/
function orderByAuthor(array $data): array
{
  function compare_lastname($a, $b)
  {
    return strnatcmp($a['author'], $b['author']);
  }

  // sort alphabetically by name
  usort($data, 'compare_lastname');
  return $data;
}
//--------------------------------------------------------
//--------------------------------------------------------

/**
* Returns a random article from the collection
* @param  array the articles to be chosen from
* @return array a random article
*/
function getRandomArticle(array $articles): array {
  $returnarticles = [];
  $returnarticles[] = $articles[rand(0, count($articles)-1)];
  return $returnarticles;
}
//--------------------------------------------------------
//--------------------------------------------------------

/**
* Give you an array with the selected article-info
* @param  int   $article  article ID
* @param  array $articles All the articles
* @return array           an array with the only selected article
*/
function getSelectedArticle(int $article, array $articles): array {
  return array_filter($articles, function($articles) use ($article) {
    return $articles['articleID'] === $article;

  });
}
//--------------------------------------------------------
//--------------------------------------------------------
/**
* Get author information from the selected artilce
* @param  array  $authors all of the authers
* @param  string $name    name of the active author
* @return array           information about the selected author
*/
function getAuthorInfo(array $authors, string $name): array {
  return array_filter($authors, function($author) use ($name){
    return $author['firstname'] === $name;
  });
}

//--------------------------------------------------------
//--------------------------------------------------------
/**
 * [getRelatedArticle description]
 * @param  array $active_article [description]
 * @param  array $articles       [description]
 * @return array                 [description]
 */
function getRelatedArticle (array $active_article, array $articles): array{

  //Right now it just chose random
  $returnarticles = [];
  //Checking for doubles  
  for ($i=0; $i < 3; $i++) {
    $random_number = rand(0, count($articles)-1);
    $chosen_articles[$i] = $random_number;
    for ($index2=0; $index2 < $i; $index2++) {
      if ($chosen_articles[$index2] === $random_number){
        $i--;
        break;
      }
    }
  }
  foreach ($chosen_articles as $chosen_article){
    $returnarticles[] = $articles[$chosen_article];
  }
  return $returnarticles;

}
