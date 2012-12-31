<?php $this->need('header.php'); ?>
<div id="timeline" class="horizontal"></div>
<section id="content" class="post_content">
	<div class="post_item">
	<div class="post">
		<article>
		<header>
			<h1><?php $this->title() ?></h1>
		</header>
		<div class="con">
			<?php $this->content(''); ?>
		</div>
		</article>
		<div class="post_comment">
		<?php $this->need('comments.php'); ?>
		</div>
	</div>
	
	<div class="post_bottom">
			<time><?php $this->date('F d, Y'); ?></time>
			<span class="premalink">
				<?php $this->permalink() ?>
			</span>
	</div>
	</div>
</section>
<div class="clear"></div>
<?php $this->need('footer.php'); ?>