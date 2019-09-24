<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "transaction", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
		"payment_dt"		=> [ "fieldType" => "DATE", "format" => "Ymd" ],
		"account_id"		=> [],
		"category_id"		=> [],
		"total_prc"			=> [],
		"item_nm"			=> [],
		"shop_nm"			=> [],
		"_limit" 			=> [ "fieldType" => "NUMBER" ],
		"_offset" 			=> [ "fieldType" => "NUMBER" ],
	],

	// Fields

	"fields"				=> [
		"payment_dt"		=> [],
		"from_account_id"	=> [],
		"to_account_id"		=> [],
		"category_id"		=> [],
		"total_prc"			=> [],
		"item_nm"			=> [],
		"shop_nm"			=> [],
		"memo_txt"			=> [],
	],

	// Search conditions

	"searches" => [
		"default" => [
			[ "field" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
			[ "type" => "parameters", "operator" => "OR", "fields" => [
					[ "parameter" => "account_id", "field" => "from_account_id", "comparer" => "=", "type" => "item" ],
					[ "parameter" => "account_id", "field" => "to_account_id", "comparer" => "=", "type" => "item" ],
				]
			],
			[ "type" => "operator", "value" => "AND" ],
			[ "type" => "parameters", "operator" => "AND", "fields" => [
					[ "type"=>"parameter", "parameter" => "category_id", "field" => "category_id", "comparer" => "=", "compareType" => "item" ],
					[ "type"=>"parameter", "parameter" => "total_prc", "field" => "total_prc", "comparer" => "=", "compareType" => "item" ],
					[ "type"=>"parameter", "parameter" => "payment_dt", "field" => "payment_dt", "comparer" => "=", "compareType" => "item" ],
					[ "type"=>"parameter", "parameter" => "item_nm", "field" => "item_nm", "comparer" => "like", "compareType" => "item" ],
					[ "type"=>"parameter", "parameter" => "shop_nm", "field" => "shop_nm", "comparer" => "like", "compareType" => "item" ],
				]
			],
			[ "type" => "operator", "value" => "AND" ],
		],
	],

	// Orders

	"orders" => [
		"default"			=>	[ "payment_dt"	=>"desc", "id"	=> "asc" ]
	],

];
