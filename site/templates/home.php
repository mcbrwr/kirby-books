<?php snippet('header') ?>

	<h1><?php echo $page->title()->html() ?></h1>

	<?php echo $page->body()->kirbytext(); ?>

	<h2>Books</h2>
	<ul>
	<?php foreach ($pages->visible()->filterBy('template','book') as $book): ?>
		<li>
			<a href="<?php echo $book->url(); ?>">
				<?php echo $book->title()->html() ?>
			</a>
		</li>
	<?php endforeach ?>
	</ul>

<?php snippet('footer') ?>