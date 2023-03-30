<?php

use Illuminate\Support\Str;
	
if(!function_exists("generateUniqueToken")){

    function generateUniqueToken($size = 10,$table = null,$column = null)
    {
	     $token = Str::random($size);

	     if($table && \DB::table($table)->where($column,$token)->count()){
		      generateUniqueToken($size, $table, $column);
	     }

	     return $token;
    }
}