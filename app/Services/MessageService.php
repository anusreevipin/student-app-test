<?php 

namespace App\Services;

use Session;

class MessageService {

	/**
	 * Set message 
	 */
	public function set( $type, $message ) 
	{
		Session::put( $type, $message );
	}
}