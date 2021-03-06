<?php

namespace HM\BackUpWordPress;

?>

<div class="wrap">

	<h1>

		BackUpWordPress

		<a class="page-title-action" href="<?php echo esc_url( get_settings_url( HMBKP_PLUGIN_SLUG . '_extensions' ) ); ?>">Extensions</a>

		<?php if ( get_option( 'hmbkp_enable_support' ) ) : ?>

			<a id="intercom" class="page-title-action" href="mailto:backupwordpress@hmn.md"><?php _e( 'Support', 'backupwordpress' ); ?></a>

		<?php else :

			add_thickbox(); ?>
			<a id="intercom-info" class="thickbox page-title-action" href="<?php echo esc_url( wp_nonce_url( add_query_arg( array( 'action' => 'load_enable_support', 'width' => '600', 'height' => '420' ), self_admin_url( 'admin-ajax.php' ) ), 'hmbkp_nonce' ) ); ?>"><span class="dashicons dashicons-admin-users"></span>&nbsp;<?php _e( 'Enable Support', 'backupwordpress' ); ?></a>

		<?php endif; ?>

	</h1>

	<?php include_once( HMBKP_PLUGIN_PATH . 'admin/backups.php' ); ?>

	<p class="howto"><?php printf( __( 'If you\'re finding BackUpWordPress useful, please %1$s rate it on the plugin directory%2$s.', 'backupwordpress' ), '<a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/backupwordpress">', '</a>' ); ?></p>

	<?php include_once( HMBKP_PLUGIN_PATH . 'admin/upsell.php' ); ?>

</div>
