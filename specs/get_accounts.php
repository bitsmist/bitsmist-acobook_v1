<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "account", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
//		"deleteDate" 		=> [],
	],

	// Fields

	"fields"	=> [
		"id"				=> [],
		"account_nm"		=> [],
	],

	// Search conditions

	"searches" => [
		"default" => [
			[ "field" => "delete_dt", "compare" => "=", "value" => "@NULL@" ],
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

