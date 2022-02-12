<?php
	namespace AllEcommerceApi;
	
	use AllEcommerceApi\TsoftService;
	
	class EcommercePlatform {
		public function __construct() {
			$platform = new TsoftService();
		}
	}