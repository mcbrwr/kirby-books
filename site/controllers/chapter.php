<?php 

return function($site, $pages, $page) {

	$book = $pages->findOpen();

	if ($page->depth() < 2 || $book->template() != 'book') {
		$indexTitle = $site->title();
	} else {
		$indexTitle = $book->title();
	}

	// dump($pages->findOpen()->index()->first()->title());
	// die();
	// $test = $pages->findOpen()->index()->findBy('uri',$page->uri())->next()->title();

	// $test = $page->uri();

	// build next page var
	if ($page->hasChildren()) {
		$next = $page->children()->first();
	} else if ($page->hasNext()) {
		$next = $page->next();
	} else if ($page->depth() > 2 && $page->parent()->hasNext()) {
		$next = $page->parent()->next();
	} else {
		$next = false;
	}

	// build prev page var
	if ($page->hasPrev() && $page->prev()->hasChildren()) {
		$prev = $page->prev()->children()->last();
	} else if ($page->hasPrev()) {
		$prev = $page->prev();
	} else if ($page->hasParent() && $page->depth() > 2) {
		$prev = $page->parent();
	} else {
		$prev = false;
	}



	

  return compact('next','prev','book','indexTitle');

};