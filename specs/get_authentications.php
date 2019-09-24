<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "user",	"keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
		"user" 				=> [ "fieldType" => "TEXT" ],
		"password" 			=> [ "fieldType" => "TEXT" ],
	],

	// Search conditions

	"searches" => [
		"default" => [
			[ "type" => "parameters", "operator" => "AND", "fields" => [
					[ "type"=>"parameter", "parameter" => "user", "field" => "user_nm", "comparer" => "=", "compareType" => "item" ],
				]
			],
			[ "field" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
			[ "type" => "operator", "value" => "AND" ],
		]
	],

	/*
	"options" => [
		"needPreflight" => false,
		"passwordParameterName" => "password",
		"passwordFieldName" => "password",
	],
	 */

];
