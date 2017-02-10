<?php snippet('header') ?>

  <main class="main" role="main">

  <?php foreach($site->page('tramites')->children() as $tramite): ?>
    <div class="panel-container <?= $tramite->tags() ?>">
      <div class="panel">
        <div class="panel-header">
          <h1><?= $tramite->calltoaction() ?></h1>
        </div>
        <div class="panel-body">
          <h4><?= $tramite->title() ?></h4>
          <p><?= $tramite->description() ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  </main>

<?php snippet('footer') ?>
