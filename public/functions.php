<?php
declare(strict_types=1);

//the functions of the show.
/**
 * Returns articles with a specific author
 * @param  array All the excisting articles
 * @param  string name of the author
 * @return array abn array with the chosen articles
 */
function selectByName(array $articles, string $name): array {
  $authorArticles = [];
  $errorCounter = 0;
  foreach($articles as $article){
    if ($article['author'] !== $name){
      $errorCounter++;
    }
  }
  if ($errorCounter === count($articles)){
    $authorArticles = [
      [
      'title' => 'No article found',
      'author' => $name,
      'content' => '',
      'publishDate' => '',
      'likeCounter' => 0,
      'contentIMG' => '']
    ];
  }
  foreach($articles as $article){
    if ($article['author'] === $name){
      $authorArticles[] = $article;
    }
  }
  return $authorArticles;
}





  function compare_lastname($a, $b)
  {
    return strnatcmp($a['author'], $b['author']);
  }

  // sort alphabetically by name
  usort($data, 'compare_lastname');
?>
