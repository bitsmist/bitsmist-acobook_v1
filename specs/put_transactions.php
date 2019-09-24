<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "transaction", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
		"payment_dt"		=> [],
		"from_account_id"	=> [],
		"to_account_id"		=> [],
		"category_id"		=> [],
		"total_prc"			=> [],
		"item_nm"			=> [],
		"shop_nm"			=> [],
		"memo_txt"			=> [],
	],

	// Fields

	"fields" => [
		"payment_dt"		=> [],
		"from_account_id"	=> [],
		"to_account_id"		=> [],
		"category_id"		=> [],
		"total_prc"			=> [],
		"item_nm"			=> [],
		"shop_nm"			=> [],
		"memo_txt"			=> [],
		/*
		"user_id"			=> [ "value" => "@USER_ID@" ];
		"create_dt"			=> [ "value" => "@CURRENT_DATETIME@" ],
		"update_dt"			=> [ "value" => "@CURRENT_DATETIME@" ],
		 */
	],

];
