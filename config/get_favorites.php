<?php
return [
	// -------------------------------------------------------------------------
	//	Plugins
	// -------------------------------------------------------------------------

	"sqlite" => [
		"tableName" => "favorite",
		"keyName" => "id"
	],

	// -------------------------------------------------------------------------
	//	Middlewares
	// -------------------------------------------------------------------------

	"dbHandler"	=> [
		"fields"	=> [
			"id",
			"from_account_id",
			"to_account_id",
			"category_id",
			"item_nm",
			"shop_nm",
			"memo_txt",
			"sort_no",
			"title",
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
];

