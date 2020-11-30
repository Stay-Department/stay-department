<?php if(wp_is_mobile()) {echo '<a href="'; echo block_field( "link" ); echo '">';} ?>
<div class="link-block <?php block_field('color'); ?>">
  <div class="left">
    <span id="svg"><?php block_field( 'svg' ); ?></span>
    <p class="text > <?php block_field('task');?> </p>
    <p id="desc"><?php block_field('desc')?></p>
  </div>
	<a href="<?php block_field( 'link' );?>">
		<div class="button">How-To</div>
	</a>
</div>
<?php if(wp_is_mobile()) {echo '</a>';} ?>
