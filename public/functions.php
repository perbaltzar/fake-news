<?php
declare(strict_types=1);

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
  function compare($likes1, $likes2)
  {
    if ($likes1['likeCounter'] == $likes2['likeCounter']) {
      return 0;
    }
    return ($likes1['likeCounter'] > $likes2['likeCounter']) ? -1 : 1;
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
  function compareDate(array $date1, array $date2): int{
    $date1 = strtotime($date1['publishDate']);
    $date2 = strtotime($date2['publishDate']);
    if ($date1 == $date2) {
      return 0;
    }
    return ($date1 > $date2) ? -1 : 1;
  }

  usort($data, "compareDate");
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
  function compareName(array $name1, array $name2): int
  {
    return strnatcmp($name1['author'], $name2['author']);
  }

  // sort alphabetically by name
  usort($data, 'compareName');
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
  $returnArticles = [];
  $returnArticles[] = $articles[rand(0, count($articles)-1)];
  return $returnArticles;
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
  return array_filter($articles, function(array $articles) use ($article): bool {
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
function getRelatedArticle (array $activeArticle, array $articles): array{
	//------------------------------------------
  //Right now it just chose a random article
  // Thats why $activeArticle is not in use
	//------------------------------------------
  $returnArticles = [];
	//---------------------
  //Checking for doubles
	//---------------------
  for ($i = 0; $i < 3; $i++) {
    $randomNumber = rand(0, count($articles)-1);
    $chosenArticles[$i] = $randomNumber;
    for ($index2 = 0; $index2 < $i; $index2++) {
      if ($chosenArticles[$index2] === $randomNumber){
        $i--;
        break;
      }
    }
  }
  foreach ($chosenArticles as $chosenArticle){
    $returnArticles[] = $articles[$chosenArticle];
  }
  return $returnArticles;

}
