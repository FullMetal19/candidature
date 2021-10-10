<!-- <?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
// get_header(); ?>
<?php
// $heading		= cspt_get_base_option('error-404-heading');
// $text			= cspt_get_base_option('error-404-text');
// $show_search	= cspt_get_base_option('error-404-show-search');
// ?>
<div class="wrap1">
	<div id="primary1" class="content-area1">
		<main id="main1" class="site-main1">
			<section class="error-404 not-found clearfix">
				<div class="page-conten">
					<?php if( !empty($heading) ) : ?>
						<h2 class="page-title"><?php //echo esc_html($heading); ?></h2>
					<?php endif; ?>
					<?php if( !empty($text) ) : ?>
						<h5 class="footer-message"><?php //echo cspt_esc_kses($text); ?></h5>
					<?php endif; ?>
					<?php
					if( $show_search==true ){
						get_search_form();
					}
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ts-home-back"><?php esc_html_e('Back To Home Page','emphires') ?></a>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->




<div class="contenu">

<div class="logo">
	<img src="http://localhost/candidature/code_candidature/logo.png"  width="200px" alt="">
</div>
 <h3 class="description"><p>Page Introuvable</p>
<p>Veuillez cliquer sur ce lien </p>
</h3>
<h1 class="lien">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ts-home-back"><?php esc_html_e("Page d'accueil",'emphires') ?></a>
</h1>
</div>




<style>
	.logo{
		text-align:center;
	}
	.logo img{
		width:35%;
	}
	
	.lien:hover{
		background: rgb(10, 107, 49);
           transform:scale(1.4);
            color: white;
            transition: 1s;
			background:rgb(141, 54, 20)
	}
	.description{
		text-align:center;
		color:rgb(10, 107, 49);

	}
	.lien{
		text-align:center;
		background:rgb(10, 107, 49);
		 margin: 0% 25%; 
		transition: 1s;
		border-radius:15px;
		
	
	}
	.lien a{
		text-decoration:none;
		text-align:center;
		color:#fff;
		
	}
	
</style>



