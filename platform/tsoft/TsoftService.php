<?php
	namespace AllEcommerceApi\tsoft;
	
	use Curl\Curl;
	use AllEcommerceApi\tsoft\Login;
	
	class TsoftService {
		public function __construct() {
			
		}
		
		public function get_token() {
			$login = new Login();
			$login->get_login('s','s');
		}
	}