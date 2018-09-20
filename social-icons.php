<!-- 
********
***** This file is overriden by creating /includes/social-icons.php in the child theme.
***** These icons are already availabe in the Divi style sheet:

  Full list: 

  .et-social-facebook a.icon:before { content: '\e093'; }
  .et-social-twitter a.icon:before { content: '\e094'; }
  .et-social-google-plus a.icon:before { content: '\e096'; }
  .et-social-pinterest a.icon:before { content: '\e095'; }
  .et-social-linkedin a.icon:before { content: '\e09d'; }
  .et-social-tumblr a.icon:before { content: '\e097'; }
  .et-social-instagram a.icon:before { content: '\e09a'; }
  .et-social-skype a.icon:before { content: '\e0a2'; }
  .et-social-flikr a.icon:before { content: '\e0a6'; }
  .et-social-myspace a.icon:before { content: '\e0a1'; }
  .et-social-dribbble a.icon:before { content: '\e09b'; }
  .et-social-youtube a.icon:before { content: '\e0a3'; }
  .et-social-vimeo a.icon:before { content: '\e09c'; }
  .et-social-rss a.icon:before { content: '\e09e'; }

********
-->


<ul class="et-social-icons">

<!-- 
********
***** Add as many versions of the following as necessary. 
******** 
-->

	<li class="et-social-icon et-social-instagram">
		<a href="https://www.instagram.com/horsefarmsforever/" class="icon" target="_blank">
			<span><?php esc_html_e( 'Instagram', 'Divi' ); ?></span>
		</a>
	</li>
  
<!-- 
********
***** Everything below is part of the original Divi social-icons.php 
******** 
-->
	
<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-google-plus">
		<a href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Google', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>


	
</ul>
