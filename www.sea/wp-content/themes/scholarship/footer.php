<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mystery Themes
 * @subpackage Scholarship
 * @since 1.0.0
 */

	if( ! is_page_template( 'templates/template-home.php' ) ) { 
    	echo '</div><!-- .mt-container -->';
	}
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php 
			$footer_widget_option = get_theme_mod( 'footer_widget_option', 'show' );
			if( $footer_widget_option == 'show' ) {
				get_sidebar( 'footer' );
			}
		?>
		<div class="site-info-wrapper">
			<div class="site-info">
				<div class="mt-container">
					<div class="scholarship-copyright-wrapper">
						<?php $scholarship_copyright_text = get_theme_mod( 'scholarship_copyright_text', __( 'Scholarship', 'scholarship' ) ); ?>
						<span class="scholarship-copyright"><?php echo wp_kses_post( $scholarship_copyright_text ); ?></span>
						<span class="sep"> | </span>
						
						<!--LiveInternet counter--><script type="text/javascript">
						document.write("<a href='//www.liveinternet.ru/click' "+
						"target=_blank><img src='//counter.yadro.ru/hit?t26.6;r"+
						escape(document.referrer)+((typeof(screen)=="undefined")?"":
						";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
						screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
						";h"+escape(document.title.substring(0,150))+";"+Math.random()+
						"' alt='' title='LiveInternet: показано число посетителей за"+
						" сегодня' "+
						"border='0' width='88' height='15'><\/a>")
						</script><!--/LiveInternet-->

						<!--<a href="https://svoimirukamy.com/" title="Поделки своими руками" target="_blank">Поделки своими руками</a>-->
					</div>
					<?php 
						$mt_sub_footer_type = get_theme_mod( 'mt_sub_footer_type', 'social_icon' );
						if( $mt_sub_footer_type == 'social_icon' ) {
					?>
		                <div class="mt-footer-social">
			           		<?php scholarship_social_icons(); ?>
			           	</div><!-- .mt-footer-social -->
			        <?php } else { ?>
			           	<nav id="site-footer-navigation" class="footer-navigation" role="navigation">
					        <?php wp_nav_menu( array( 'theme_location' => 'scholarship_footer_menu', 'menu_id' => 'footer-menu' ) ); ?>
			           	</nav><!-- #site-navigation -->
		           	<?php } ?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
	<div id="mt-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
</div><!-- #page -->

<?php wp_footer(); ?>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(52245058, "init", {
			id:52245058,
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/52245058" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body>
</html>