<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "category", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
//		"deleteDate" 		=> [],
	],

	// Fields

	"fields"	=> [
		"id"				=> [],
		"category_nm"		=> [],
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

