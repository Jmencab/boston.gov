<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 *
 * @see https://drupal.org/node/1728246
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?> id="<?php print $block_html_id; ?>">
  <button class="drawer-trigger search-trigger" title="Toggle search">
    <span class="drawer-trigger-search">Search</span>
  </button>
  <div class="slide-down-element drawer">
    <button class="drawer-close-button search-close-button" title="Close Search"></button>
    <div class="content bos-search-form">
      <?php print $content; ?>
    </div>
  </div>
</div>
