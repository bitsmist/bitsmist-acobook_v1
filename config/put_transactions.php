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
				"total_prc",
				"item_nm",
				"shop_nm",
				"memo_txt",
			],
		],
	],

	// -------------------------------------------------------------------------
	//	Plugins
	// -------------------------------------------------------------------------

	"sqlite" => [
		"tableName" => "transaction",
		"keyName" => "id"
	],

	// -------------------------------------------------------------------------
	//	Middlewares
	// -------------------------------------------------------------------------

	"dbHandler" => [
		"fields" => [
			"payment_dt",
			"from_account_id",
			"to_account_id",
			"category_id",
			"total_prc",
			"item_nm",
			"shop_nm",
			"memo_txt",
			"update_dt" => [ "value" => "@CURRENT_DATETIME@" ],
		],
	],
];
