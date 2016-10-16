<?php 

return function($site, $pages, $page) {

	$indexTitle = $site->title();

  return compact('indexTitle');

};