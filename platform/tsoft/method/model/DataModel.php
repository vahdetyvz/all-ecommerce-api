<?php
	namespace AllEcommerceApi\DataModel;
	
	use Illuminate\Database\Eloquent\Model;
	use DB;
	
	class DataModel extends BaseModel {
		public static function get_data($platform) {
			return DB::table('all_ecommerce')->where('data_key',$platform)->first();
		}
	}