<?php 

return function($site, $pages, $page) {

	$rootPage = $page->parents()->last();
	$book = $rootPage;

	if ($page->depth() < 2 || $rootPage->template() != 'book') {
		$indexTitle = $site->title();
	} else {
		$indexTitle = $rootPage->title();
	}

  return compact('rootPage','book','indexTitle');

};