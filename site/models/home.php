<?php

class HomePage extends Page {
  public function children() {
    $results = [];
    $pages   = [];
    # ToDo: enter an API key [ https://developer.nytimes.com/get-started ]
    $apiKey  = '';
    $request = Remote::get('https://api.nytimes.com/svc/topstories/v2/home.json?api-key=' . $apiKey);

    if($request->code() === 200) {
      $results = $request->json(false)->results;
    }

    foreach($results as $key => $article) {
      $pages[] = [
        'slug'     => Str::slug($article->title),
        'num'      => $key+1,
        'template' => 'article',
        'model'    => 'article',
        'content'  => [
          'short_url' => $article->short_url,
          'title'     => $article->title,
          'byline'    => $article->byline,
          'abstract'  => $article->abstract,
        ]
      ];
    }

    return Pages::factory($pages, $this);
  }
}