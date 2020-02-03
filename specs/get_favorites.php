<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "favorite", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
//		"deleteDate" 		=> [],
	],

	// Fields

	"fields"	=> [
		"id"				=> [],
		"from_account_id"	=> [],
		"to_account_id"		=> [],
		"category_id"		=> [],
		"item_nm"			=> [],
		"shop_nm"			=> [],
		"memo_txt"			=> [],
		"sort_no"			=> [],
		"title"				=> [],
	],

	// Search conditions

	"searches" => [
		"default" => [
			[ "field" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
		]
	],

	// Orders

	"orders"	=> [
		"default" => [
			"sort_no" 		=> "asc",
			"id" 			=> "asc"
		],
	],
];

