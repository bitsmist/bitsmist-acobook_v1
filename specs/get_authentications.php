<?php
return [

	// Options

	"options" => [
		"userId"	=> "id",
		"userName"	=> "user_nm"
	],

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "user",	"keyName" => "user_nm" ],
	],

	// Parameters

	"parameters" => [
		"user" 				=> [ "fieldType" => "TEXT", "validator" => ["required"] ],
		"password" 			=> [ "fieldType" => "TEXT", "validator" => ["required"] ],
	],

	// Fields

	"fields" => [
		"id"			=> [],
		"user_nm"		=> [],
	],

	// Search conditions

	"searches" => [
		"default" => [
			[ "type" => "parameters", "operator" => "AND", "fields" => [
					[ "type"=>"parameter", "parameter" => "user", "field" => "user_nm", "comparer" => "=", "compareType" => "item" ],
					[ "type"=>"parameter", "parameter" => "password", "field" => "password_txt", "comparer" => "=", "compareType" => "item" ],
				]
			],
			[ "field" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
			[ "type" => "operator", "value" => "AND" ],
		]
	],

];
