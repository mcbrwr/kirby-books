<?php snippet('header') ?>

<h1 class="book_title"><?php echo $book->title()->html() ?></h1>

<?php echo $page->body()->kirbytext(); ?>

<?php snippet('footer') ?>