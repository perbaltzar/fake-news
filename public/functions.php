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
  $authorArticles = [];
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
    foreach($articles as $article){
      if ($article['author'] === $name){
        $authorArticles[] = $article;
      }
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
