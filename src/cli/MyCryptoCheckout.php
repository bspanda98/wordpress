<?php

namespace mycryptocheckout\cli;

use Exception;
use WP_CLI;

/**
Generic commands for MCC.

@since		2019-01-09 14:15:09
**/
class MyCryptoCheckout
{
	/**
		Run internal tests.

		* @since		2019-01-09 14:16:42
	**/
	public function tests()
	{
		$tests = new Tests( $this );
		$tests->run();
	}

	/**
		Request an account update.
		@since		2019-01-09 14:17:48
	**/
	public function update_account()
	{
		$result = MyCryptoCheckout()->mycryptocheckout_retrieve_account();
		if ( $result )
			WP_CLI::line( 'Account info updated. :) ' );
		else
			throw new Exception( 'Account info update failed. :(' );
		return true;
	}
}
