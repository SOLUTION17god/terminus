<?php
/**
 * Authenticate to Pantheon and store a local secret token.
 *
 * @when before_wp_load
 */
class Sites_Command extends WP_CLI_Command {
	/**
	 * Show a list of your sites on Pantheon
	 */
	public function show() {
    $sites = $this->terminus_request('user', $this->session->user_uuid, 'sites');
    var_dump($sites);
	}


}

WP_CLI::add_command( 'sites', 'Sites_Command' );

