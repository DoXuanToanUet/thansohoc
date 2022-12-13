<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package flatsome
 */

get_header(); ?>
<style>
	.error404 {
		background:rgb(7,11,30);
	}
	.errors__pretitle{
		font-size:40px;
	}
	@media (max-width:575px){
		.errors__pretitle{
			font-size:20px;
		}
	}
</style>
<?php do_action( 'flatsome_before_404' ); ?>
<?php
if ( get_theme_mod( '404_block' ) ) :
	echo do_shortcode( '[block id="' . get_theme_mod( '404_block' ) . '"]' );
else :
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container pt" role="main">
			<section class="error-404 not-found mt mb" style="color:#fff">
				<div class="row align-middle">
					<div class="col medium-6 small-12">
                    <div class="errors__text"><p class="errors__pretitle" >Xin lỗi, chúng tôi không tìm thấy trang mà bạn cần!</p>
                    <div class="errors__buttons d-flex" style="gap:15px">
                        <a class="btn-dev u-btn u-btn--primary u-btn--medium" href="<?php echo home_url();?>">Trang chủ</a>
                        <a class="btn-dev u-btn u-btn--primary-outline u-btn--medium" href="/blog/">Blog</a></div>
                    </div>
                    </div>
					<div class="col medium-6 small-12">
						<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/404.png'; ?>" alt="">
					</div>
				</div>
			</section>
		</main>
	</div>
<?php endif; ?>
<?php do_action( 'flatsome_after_404' ); ?>
<?php get_footer(); ?>
