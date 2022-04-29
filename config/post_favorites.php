<?php
return [
	// -------------------------------------------------------------------------
	//	Options
	// -------------------------------------------------------------------------

	"options" => [
		"body" => [
			"parameters" => [
				"from_account_id",
				"to_account_id",
				"category_id",
				"item_nm",
				"shop_nm",
				"memo_txt",
				"sort_no",
				"title"
			],
		],
	],

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

	"dbHandler" => [
		"fields"	=> [
			"from_account_id",
			"to_account_id",
			"category_id",
			"item_nm",
			"shop_nm",
			"memo_txt",
			"sort_no",
			"title",
			"create_dt" => [ "value" => "@CURRENT_DATETIME@" ],
			"update_dt" => [ "value" => "@CURRENT_DATETIME@" ],
		],
	],
];

