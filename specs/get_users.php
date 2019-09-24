<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "user", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
//		"deleteDate" 		=> [],
	],

	// Fields

	"fields"	=> [
		"id"				=> [],
		"user_nm"		=> [],
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
			"id" 			=> "asc"
		],
	],
];

