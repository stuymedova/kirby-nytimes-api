<main>
  <header>
    <h1><?= $page->title() ?></h1>
  </header>
  <ul>
    <?php foreach ($page->children() as $article): ?>
    <li>
      <h2><a href='<?= $article->short_url() ?>'><?= $article->title() ?></a></h2>
      <p><?= $article->byline() ?></p>
      <p><?= $article->abstract() ?></p>
    </li>
    <?php endforeach ?>
  </ul>
</main>