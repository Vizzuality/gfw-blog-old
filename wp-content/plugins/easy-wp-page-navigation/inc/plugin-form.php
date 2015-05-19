<div class="wrap">
	<h2><?php _e( 'Easy WP Page Navigation Options', 'easy-wp-page-navigation' ); ?></h2>
	<!-- Plugin Options Form -->
	<form method="post" action="options.php" enctype="multipart/form-data" novalidate>
		<?php
		settings_fields( EWPN_ST );
		$options = get_option( EWPN_ST );
		?>
		<h2 class="nav-tab-wrapper kang-tabs">
			<a href="#general-options" class="nav-tab general-options nav-tab-active"><?php _e( 'General options', EWPN ); ?></a>
			<a href="#posts-per-page-taxonomies-option" class="nav-tab posts-per-page-taxonomies-option"><?php _e( 'Posts per page taxonomies options', EWPN ); ?></a>
		</h2>
		<div class="kang-tabs-content">
			<!-- Plugin Text Options -->
			<div class="general-options">
				<div class="kang-settings-field">
					<div class="kang-settings-label">
						<label><?php _e( 'Custom Text For First Page', EWPN ); ?></label>
					</div>
					<div class="kang-settings-input">
						<input type="text" class="regular-text" name="<?php echo EWPN_ST; ?>[first_text]" value="<?php echo esc_attr( $options['first_text'] ); ?>" />
					</div>
				</div>
				<div class="kang-settings-field">
					<div class="kang-settings-label">
						<label><?php _e( 'Custom Text For Last Page', EWPN ); ?></label>
					</div>
					<div class="kang-settings-input">
						<input type="text" class="regular-text" name="<?php echo EWPN_ST; ?>[last_text]" value="<?php echo esc_attr( $options['last_text'] ); ?>" />
					</div>
				</div>
				<div class="kang-settings-field">
					<div class="kang-settings-label">
						<label><?php _e( 'Custom Text For Previous Page', EWPN ); ?></label>
					</div>
					<div class="kang-settings-input">
						<input type="text" class="regular-text" name="<?php echo EWPN_ST; ?>[prev_text]" value="<?php echo esc_attr( $options['prev_text'] ); ?>" />
					</div>
				</div>
				<div class="kang-settings-field">
					<div class="kang-settings-label">
						<label><?php _e( 'Custom Text For Next Page', EWPN ); ?></label>
					</div>
					<div class="kang-settings-input">
						<input type="text" class="regular-text" name="<?php echo EWPN_ST; ?>[next_text]" value="<?php echo esc_attr( $options['next_text'] ); ?>" />
					</div>
				</div>
				<div class="kang-settings-field">
					<div class="kang-settings-label">
						<label><?php _e( 'Align Page Navigation', EWPN ); ?></label>
					</div>
					<div class="kang-settings-input">
						<select name="<?php echo EWPN_ST; ?>[align]">
							<option value="left" <?php selected( $options['align'], 'left' ); ?>><?php _e( 'Align left', EWPN ); ?></option>
							<option value="center" <?php selected( $options['align'], 'center' ); ?>><?php _e( 'Align center', EWPN ); ?></option>
							<option value="right" <?php selected( $options['align'], 'right' ); ?>><?php _e( 'Align right', EWPN ); ?></option>
						</select>
					</div>
				</div>
			</div>
			<!-- Plugin Posts Per Page Taxonomies Options -->
			<div class="posts-per-page-taxonomies-option">
				<p class="description"><?php _e( 'Fill posts per page for taxonomies your want paging, if field empty we will get default value in "Blog pages show at most"', EWPN ); ?></p>
				<p class="description">
					<strong><?php _e( 'Note: All fields of this tab just apply value is number', EWPN ); ?></strong></p>
				<br>
				<?php $taxonomies = self::get_all_taxonomies();
				if ( ! empty ( $taxonomies ) )
				{
					foreach ( $taxonomies as $name => $tax )
					{
						$value = isset ( $options[$name] ) ? $options[$name] : '';
						?>
						<div class="kang-settings-field">
							<div class="kang-settings-label">
								<label><?php echo $tax->labels->name; ?></label>
							</div>
							<div class="kang-settings-input">
								<input type="text" class="regular-text" name="<?php echo EWPN_ST; ?>[<?php echo $name; ?>]" value="<?php echo esc_attr( $value ); ?>" />
							</div>
						</div>
					<?php }
				}
				?>
			</div>
		</div>
		<p class="submit">
			<?php submit_button( __( 'Save', EWPN ), 'primary', 'submit', false ); ?>
		</p>
	</form>
</div>