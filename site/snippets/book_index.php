<ul class="index--list">
  <?php foreach($book->children()->filterBy('template','chapter') as $p): ?>
    <li class="<?php e($p->isOpen(), 'open') ?><?php e($p->isActive(), ' active') ?>">
      <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
      <?php if($p->hasVisibleChildren()): ?>
        <ul class="submenu">
          <?php foreach($p->children()->visible() as $p): ?>
            <li class="<?php e($p->isOpen(), 'open') ?><?php e($p->isActive(), ' active') ?>">
              <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>
    </li>
  <?php endforeach ?>
</ul>