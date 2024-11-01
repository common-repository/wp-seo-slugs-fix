<?php

/*
Plugin Name: WP SEO slugs fix
Plugin URI: http://www.marcocanestrari.it
Description: Fixes Yoast SEO 3.0.x bug that causes slugs not to be set
Version: 1.0
Author: Marco Canestrari
Author URI: http://www.marcocanestrari.it
License: GPL2
*/

add_action('admin_footer','yssf_remove_seo_callback'); // Fix al problema dell'url non aggiornato causato da Yoast
add_action( 'admin_notices', 'yssf_message' );

function yssf_remove_seo_callback() {
	?>
	<span id="editable-post-name" style="display: none;">Not Null</span>
	<?php
}

function yssf_message() {

    echo '	<div class="updated">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="CW3E9EKK55ATE">
                        <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal Ð The safer, easier way to pay online.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        Yoast SEO slugs bug <b>is now fixed</b>. Please tell me <b>you are happy</b> :)
		</div>';

}

?>