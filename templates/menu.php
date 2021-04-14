<ul class="<?= $menuClass ?>">
<?php
foreach($arr as $item) {
  ?>
  <li>
      <a 
      class =" 
        <?php 
        if (isCurrentUrl($item['path'])):
            echo "menu-active";
        endif;
        ?>"
      href="<?= $item['path'] ?>">
      <?= cutstring($item['title']) ?></a>
  </li>
  <?php
}; ?>
</ul>