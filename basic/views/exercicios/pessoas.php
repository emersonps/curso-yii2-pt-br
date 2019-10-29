<?php 
  use \yii\widgets\LinkPager;
?>
<h1>Pessoas</h1>
<hr>

<ul>
  <?php foreach($pessoas as $pessoas) : ?>
    <li>
      <?= $pessoas->nome . ' - ' . $pessoas->email  ?><br/>
      <small><?= $pessoas->cidade . ' - ' . $pessoas->estado  ?></small>
    </li>
  <?php endforeach ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination])?>