<?php get_header();
include(TEMPLATEPATH . '/inc/featured.php');
?>
<?php get_sidebar(); ?>
<div id="main-content" class="col-md-8">
	<h2><a href="#">Videos</a></h2>
	<div class="post">
		<a href="#"><img src="images/post-images/post-1.png" alt="post"></a>
		<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
		<p>Pellentesque habittant morbi sristique senectus et netus et</p>
		<p class="meta-data">By: Demon Warlock | On: August 20, 2016</p>
		<a href="#" class="comment-link">6</a>
		<a href="#" class="more-link">Continue reading ...</a>
	</div> <!--end post-->

	<h2><a href="#">PHP Videos</a></h2>
	<div class="post">
		<a href="#"><img src="images/post-images/post-2.png" alt="post"></a>
		<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
		<p>Pellentesque habittant morbi sristique senectus et netus et</p>
		<p class="meta-data">By: Demon Warlock | On: August 20, 2016</p>
		<a href="#" class="comment-link">6</a>
		<a href="#" class="more-link">Continue reading ...</a>
	</div> <!--end post-->

	<h2><a href="#">Jquery Tutorials</a></h2>
	<div class="post">
		<a href="#"><img src="images/post-images/post-3.jpng" alt="post"></a>
		<h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
		<p>Pellentesque habittant morbi sristique senectus et netus et</p>
		<p class="meta-data">By: Demon Warlock | On: August 20, 2016</p>
		<a href="#" class="comment-link">6</a>
		<a href="#" class="more-link">Continue reading ...</a>
	</div> <!--end post-->
</div> <!--end main-content-->
<?php get_sidebar("second") ?>
<?php get_footer(); ?>
