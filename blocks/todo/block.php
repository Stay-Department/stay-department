<?php if(wp_is_mobile()) {echo '<a class="listlink" href="'; echo block_field( "link" ); echo '">';} ?>
<div class="inner">
	<div class="checkbox"> 
		<input type="checkbox" name="<?php block_field('task')?>" id="<?php block_field('task')?>">
		<label for="<?php block_field('task')?>">
			<svg viewBox="0 0 32 32" fill="none">
				<rect class="box" width="32" height="32" rx="10" fill="#B42B2B"/>
				<path class="check" d="M22 12L13.75 21L10 16.9091"/>
			</svg>
		</label>
	</div>
	
	<div class="logo">
		<span><?php block_field( 'logo' ); ?></span>
		<p> <?php block_field( 'streaming' ); ?> </p>
		<p id="stream"><?php block_field('time');?></p>
	</div>
	
	<div class="inner_button">
		<a href="<?php block_field( 'link' ); ?>">
			<div class="todo-button">
				<?php block_field( 'button-text' ); ?>
			</div>
		</a>
	</div>
	
</div>
<?php if(wp_is_mobile()) {echo '</a>';} ?>
