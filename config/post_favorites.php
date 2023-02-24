<?php
return [
	// -------------------------------------------------------------------------
	//	Options
	// -------------------------------------------------------------------------

	"options" => [
		"body" => [
			"parameters" => [
				"payment_dt",
				"from_account_id",
				"to_account_id",
				"category_id",
				"item_nm",
				"shop_nm",
				"total_prc",
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
			"payment_dt",
			"from_account_id",
			"to_account_id",
			"category_id",
			"item_nm",
			"shop_nm",
			"total_prc",
			"memo_txt",
			"sort_no",
			"title",
			"create_dt" => [ "value" => "@CURRENT_DATETIME@" ],
			"update_dt" => [ "value" => "@CURRENT_DATETIME@" ],
		],
	],
];

