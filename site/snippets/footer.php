<?php if (empty($page)) $page = page(); ?>
<?php if (empty($site)) $site = site(); ?>
</main>
  
<nav class="index" role="navigation" id="menu">
	<?php if ($page->template() == 'book' || $page->template() == 'chapter'): ?>
		<h2><?php echo $book->title()->html() ?></h2>
		<?php snippet('book_index') ?>
		<aside>
			<h2>Navigation</h2>
			<?php snippet('book_nav') ?>
		</aside>
	<?php else: ?>
		<h2>Navigation</h2>
		<?php snippet('book_nav') ?>
	<?php endif ?>
</nav>

</body>
</html>