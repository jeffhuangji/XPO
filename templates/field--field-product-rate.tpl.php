<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item"<?php print $item_attributes[$delta]; ?>>
        <?php 
          $star = intval($item['#markup']);
          for ($i = 1; $i <= 5; $i++) {
            if ($i > $star) {
              print "<span class='star empty-star'>☆</span>";
            } else {
              print "<span class='star full-star'>★</span>";
            }
          }
        ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
