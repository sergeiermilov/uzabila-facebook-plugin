<?php 

// create menu link
function uzabila_facebook_options_link(){
	add_options_page(
		'Uzabila Facebook Options',
		'Uzabila Facebook',
		'manage_options',
		'uzabila-facebook-options',
		'uzabila_facebook_options_content'
	);
}

// create options page content
function uzabila_facebook_options_content(){

	// init options global
	global $uzabila_facebook_options;
	ob_start(); ?>

	<div class="wrap">
		<h2><?php _e('Uzabila Facebook Settings', 'uzabila_facebook_domain'); ?></h2>
		<p><?php _e('All options for Uzabila Facebook plugin', 'uzabila_facebook_domain'); ?></p>
		<form method="POST" action="options.php">
			<?php settings_fields( 'uzabila_facebook_settings_group' ); ?>
			<table class="form-table">
				<tbody>
					
					<tr>
						<th scope="row">
							<label for="uzabila_facebook_settings[enable]"><?php _e('Enable', 'uzabila_facebook_domain'); ?></label>
						</th>
						<td>
							<input name="uzabila_facebook_settings[enable]" type="checkbox" id="uzabila_facebook_settings[enable]" value="1" <?php checked( '1', $uzabila_facebook_options['enable'] ); ?>>
						</td>
					</tr>

					<tr>
						<th scope="row"><label for="uzabila_facebook_settings[facebook_url]"><?php _e('Facebook Profile URL', 'uzabila_facebook_domain'); ?></label></th>
						<td><input name="uzabila_facebook_settings[facebook_url]" type="text" id="uzabila_facebook_settings[facebook_url]" value="<?php echo $uzabila_facebook_options['facebook_url']; ?>" class="regular-text"><p class="description"><?php _e( 'Enter your facebook profila URL' , 'uzabila_facebook_domain' ); ?></p>
						</td>
					</tr>

					<tr>
						<th scope="row">
							<label for="uzabila_facebook_settings[link_color]"><?php _e('Link Color', 'uzabila_facebook_domain'); ?></label></th>
						<td><input name="uzabila_facebook_settings[link_color]" type="text" id="uzabila_facebook_settings[link_color]" value="<?php echo $uzabila_facebook_options['link_color']; ?>" class="regular-text"><p class="description"><?php _e( 'Enter link color in HEX' , 'uzabila_facebook_domain' ); ?></p>
						</td>
					</tr>

					<tr>
						<th scope="row">
							<label for="uzabila_facebook_settings[show_in_feed]"><?php _e('Show in feeds', 'uzabila_facebook_domain'); ?></label></th>
						<td>
							<input name="uzabila_facebook_settings[show_in_feed]" type="checkbox" id="uzabila_facebook_settings[show_in_feed]" value="1" <?php checked( '1', $uzabila_facebook_options['show_in_feed'] ); ?>></td>
					</tr>

				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Save changes', 'uzabila_facebook_domain' ); ?>">
			</p>
		</form>
	</div>

<?php echo ob_get_clean(); }

add_action( 'admin_menu', 'uzabila_facebook_options_link' );

// register settings
function uzabila_facebook_register_settings(){
	register_setting( 'uzabila_facebook_settings_group', 'uzabila_facebook_settings' );
}

add_action( 'admin_init', 'uzabila_facebook_register_settings' );