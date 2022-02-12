<?php
	namespace AllEcommerceApi\Login;
	
	use Curl\Curl;
	use AllEcommerceApi\DataModel;
	
	class Login {
		public function __construct() {
			
		}
		
		public function get_login($_username,$_password) {
			/*$curl = new Curl();
			$curl->post('auth/login/', [
				'username' => 'myusername',
				'password' => 'mypassword',
			]);*/
			$data = DataModel::get_data('tsoft');
			print_r($data);
		}
	}