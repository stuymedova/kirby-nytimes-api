<main>
  <h1><?= $page->title() ?></h1>
  <ul>
    <?php foreach ($page->children() as $article): ?>
    <li>
      <a href='<?= $article->short_url() ?>'><h2><?= $article->title() ?></h2></a>
      <p><?= $article->byline() ?></p>
      <p><?= $article->abstract() ?></p>
    </li>
    <?php endforeach ?>
  </ul>
</main>