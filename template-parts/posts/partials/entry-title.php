<h6 class="entry-category is-xsmall">
	<?php echo get_the_category_list( __( ', ', 'flatsome' ) ) ?>
</h6>

<?php
if ( is_single() ) {
	echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
} else {
	echo '<h2 class="entry-title"><a href="' . get_the_permalink() . '" rel="bookmark" class="plain">' . get_the_title() . '</a></h2>';
}
?>

<div class="entry-divider is-divider small"></div>

<?php
$single_post = is_singular( 'post' );
if ( $single_post && get_theme_mod( 'blog_single_header_meta', 1 ) ) : ?>
	<div class="entry-meta">
		
		<!--Post Views-->
		<div class="post-detail-subhead flex d-align-spacebt d-align-middle">
			<div class="post-view-wrapper flex d-flex-col flex-column">
				<div class="post-view post-view-auhor flex d-gap d-align-middle">
					<div class="post-view-authorname-date">
						<div class="post-view-authorname flex ">
							<a class="post-author flex" href="<?php echo home_url().'/author/'. get_the_author_meta('user_nicename');?>" style="color:#444; font-weight:600; gap:4px">
								by <img  style="width:30px; height:30px; border-radius:50%;" class="user-avatar" src="<?php  echo get_stylesheet_directory_uri() . '/assets/img/av3.jpg' ?>" alt=""><?php the_author(); ?>
							</a>
						</div>
					</div>
					<span style="padding:0px 4px">-</span>
					<div class="post-view-authordate flex" style="color:#757575;">
							<?php the_date("d/m/Y"); ?>
					</div>
				</div>
			</div>

			</div>
		
		<!-- End Post Views-->
	</div>
<?php elseif ( ! $single_post && 'post' == get_post_type() ) : ?>
	<div class="entry-meta">
		
	</div>
	
<?php endif; ?>
