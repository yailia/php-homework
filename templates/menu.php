<ul class="<?= $menuClass ?>">
<?php
foreach($arr as $item) {
  ?>
  <li>
      <a 
      class = "<?=isMenuActive($item['path']) ?>"
      href="<?= $item['path'] ?>">
      <?= cutstring($item['title']) ?></a>
  </li>
  <?php
}; ?>
</ul>