<?php snippet('header') ?>

<h1><?php echo $page->title()->html() ?></h1>

<?php echo $page->body()->kirbytext(); ?>

<?php snippet('footer') ?>