<?php
declare(strict_types=1);



//--------------------------------------------------------
//the functions of the show.
/**
* Returns articles with a specific author
* @param  array All the excisting articles
* @param  string name of the author
* @return array abn array with the chosen articles
*/

// använda array_filter istället?
// return $name === 'Per' //true
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
