<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">  
  <link rel="stylesheet" href="/assets/css/main.css">
  <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
</head>
<body>
<nav class="static-nav" role="navigation">
	<?php if ($page->template() == 'chapter'): ?>
		<?php if ($prev): ?>
				<a href="<?php echo $prev->url() ?>">
					<svg width="32px" height="28px" viewBox="0 0 32 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-412.000000, -933.000000)" fill="#000000"> <path d="M438,957 C438,958.104 437.104,959 436,959 L416,959 C414.896,959 414,958.104 414,957 L414,937 C414,935.896 414.896,935 416,935 L436,935 C437.104,935 438,935.896 438,937 L438,940 L440,940 L440,937 C440,934.791 438.209,933 436,933 L416,933 C413.791,933 412,934.791 412,937 L412,957 C412,959.209 413.791,961 416,961 L436,961 C438.209,961 440,959.209 440,957 L440,954 L438,954 L438,957 L438,957 Z M443,946 L421.414,946 L426.657,940.757 C427.048,940.367 427.048,939.733 426.657,939.343 C426.267,938.952 425.633,938.952 425.242,939.343 L418.343,946.242 C418.135,946.451 418.046,946.728 418.06,947 C418.046,947.272 418.135,947.549 418.343,947.758 L425.242,954.657 C425.633,955.048 426.267,955.048 426.657,954.657 C427.048,954.267 427.048,953.633 426.657,953.242 L421.414,948 L443,948 C443.553,948 444,947.553 444,947 C444,946.448 443.553,946 443,946 L443,946 Z" id="arrow-left" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
					<span class="sr-only">Previous Chapter</span>
				</a>
			<?php endif ?>
			<?php if ($next): ?>
				<a href="<?php echo $next->url() ?>">
					<svg width="32px" height="28px" viewBox="0 0 32 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-360.000000, -933.000000)" fill="#000000"> <path d="M388,933 L368,933 C365.791,933 364,934.791 364,937 L364,941 L366,941 L366,937 C366,935.896 366.896,935 368,935 L388,935 C389.104,935 390,935.896 390,937 L390,957 C390,958.104 389.104,959 388,959 L368,959 C366.896,959 366,958.104 366,957 L366,953 L364,953 L364,957 C364,959.209 365.791,961 368,961 L388,961 C390.209,961 392,959.209 392,957 L392,937 C392,934.791 390.209,933 388,933 L388,933 Z M377.343,953.243 C376.953,953.633 376.953,954.267 377.343,954.657 C377.733,955.048 378.367,955.048 378.758,954.657 L385.657,947.758 C385.865,947.549 385.954,947.272 385.94,947 C385.954,946.728 385.865,946.451 385.657,946.243 L378.758,939.344 C378.367,938.953 377.733,938.953 377.343,939.344 C376.953,939.733 376.953,940.367 377.343,940.758 L382.586,946 L361,946 C360.447,946 360,946.448 360,947 C360,947.553 360.447,948 361,948 L382.586,948 L377.343,953.243 L377.343,953.243 Z" id="arrow-right" sketch:type="MSShapeGroup"></path> </g> </g> </svg>
					<span class="sr-only">Next Chapter</span>
				</a>
			<?php endif ?>
	<?php endif ?>
	<a href="/">
		<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px"viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"> <g> <path d="M19,24H5c-0.6,0-1-0.4-1-1v-9H1c-0.4,0-0.8-0.2-0.9-0.6C-0.1,13,0,12.6,0.3,12.3l11-12c0.4-0.4,1.1-0.4,1.5,0l11,12 c0.3,0.3,0.3,0.7,0.2,1.1C23.8,13.8,23.4,14,23,14h-3v9C20,23.6,19.6,24,19,24z M6,22h12v-9c0-0.6,0.4-1,1-1h1.7L12,2.5L3.3,12H5 c0.6,0,1,0.4,1,1V22z"/> </g> </g> <g> <g> <path d="M14,24h-4c-0.6,0-1-0.4-1-1v-6c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1v6C15,23.6,14.6,24,14,24z M11,22h2v-4h-2V22z"/> </g> </g> <g> <g> <path d="M12,13c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S13.7,13,12,13z M12,9c-0.6,0-1,0.4-1,1s0.4,1,1,1s1-0.4,1-1S12.6,9,12,9z"/> </g> </svg>
		<span class="sr-only">Home</span>
	</a>
	<a href="#menu">
		<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px"viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"> <path d="M20,5H4C3.4,5,3,4.6,3,4s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,5,20,5z"/> <path d="M20,21H4c-0.6,0-1-0.4-1-1s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,21,20,21z"/> <path d="M20,13H4c-0.6,0-1-0.4-1-1s0.4-1,1-1h16c0.6,0,1,0.4,1,1S20.6,13,20,13z"/> </svg>
		<span class="sr-only">Menu</span>
	</a>
</nav>
<main>