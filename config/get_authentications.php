<?php
return [
	// -------------------------------------------------------------------------
	//	Options
	// -------------------------------------------------------------------------

	"options" => [
		"query" => [
			"parameters" => [
				"user" 			=> [ "type" => "TEXT", "validator" => ["REQUIRED"] ],
				"password" 		=> [ "type" => "TEXT", "validator" => ["REQUIRED"] ],
			],
		]
	],

	// -------------------------------------------------------------------------
	//	Plugins
	// -------------------------------------------------------------------------

	"sqlite" => [
		"tableName" => "user",
		"keyName" => "user_nm"
	],

	// -------------------------------------------------------------------------
	//	Middlewares
	// -------------------------------------------------------------------------

	//"dbHandler"	=> [
	"loginAuth"	=> [
		"fields" => [
			"id",
			"user_nm"
		],
		"searches" => [
			"default" => [
				[ "type" => "parameters", "operator" => "AND", "fields" => [
						[ "type"=>"parameter", "parameterName" => "user", "fieldName" => "user_nm", "comparer" => "=", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "password", "fieldName" => "password_txt", "comparer" => "=", "compareType" => "item" ],
					]
				],
				[ "fieldName" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
				[ "type" => "operator", "value" => "AND" ],
			]
		],
	],
];
