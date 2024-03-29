<?php
return [
	// -------------------------------------------------------------------------
	//	Middlewares
	// -------------------------------------------------------------------------

	"dbHandler"	=> [
		"fields"	=> [
			"id",
			"category_nm",
		],
		"searches" => [
			"default" => [
				[ "fieldName" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
			]
		],
		"orders"	=> [
			"default" => [
				"sort_no" 		=> "asc",
				"id" 			=> "asc"
			],
		],
	],

	// -------------------------------------------------------------------------
	//	Plugins
	// -------------------------------------------------------------------------

	"sqlite" => [
		"tableName" => "category",
		"keyName" => "id"
	],

];

