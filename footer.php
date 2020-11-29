		</main><!-- #site-content -->

		<div class="credits section-inner">
            <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> | Powered by <a href="https://www.jetbrains.com" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/images/jetbrains.png" alt="Jetbrains Logo" />JetBrains</a> &amp; <a href="https://steinhauer.software" target="_blank"><img src="<?= get_template_directory_uri() ?>/assets/images/steinhauer.software.png" alt="steinhauer.software Logo"/>steinhauer.software</a></p>
			<p class="theme-by"><?php _e( 'Theme by', 'hitchcock' ); ?> <a href="https://www.andersnoren.se">Anders Nor&eacute;n</a></p>
		</div><!-- .credits -->

		<?php wp_footer(); ?>

	</body>
	
</html>