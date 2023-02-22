<?php
return [
	// -------------------------------------------------------------------------
	//	Options
	// -------------------------------------------------------------------------

	"options" => [
		"query" => [
			"parameters" => [
				"payment_dt"		=> [ "fieldType" => "DATE", "format" => "Ymd" ],
				"account_id",
				"category_id",
				"total_prc",
				"item_nm",
				"shop_nm",
				"memo_txt",
				"_limit" 			=> [ "fieldType" => "NUMBER" ],
				"_offset" 			=> [ "fieldType" => "NUMBER" ],
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

	"queryLimiter" => [
		"parameters" => [
			"_limit" => [
				"max" => 50,
			],
			"_offset" => [
				"max" => 999
			]
		]
	],

	"dbHandler"	=> [
		"fields" => [
			"id",
			"payment_dt",
			"from_account_id",
			"to_account_id",
			"category_id",
			"total_prc",
			"item_nm",
			"shop_nm",
			"memo_txt",
		],
		"searches" => [
			"default" => [
				[ "fieldName" 		=> "user_id", "compare" => "=", "value" => "@SESSION_USER_ID@" ],
				[ "fieldName" 		=> "delete_dt", "compare" => "=", "value" => "@NULL@" ],
				[ "type" => "operator", "value" => "AND" ],
				[ "type" => "parameters", "operator" => "OR", "fields" => [
						[ "parameterName" => "account_id", "fieldName" => "from_account_id", "comparer" => "=", "type" => "item" ],
						[ "parameterName" => "account_id", "fieldName" => "to_account_id", "comparer" => "=", "type" => "item" ],
					]
				],
				[ "type" => "operator", "value" => "AND" ],
				[ "type" => "parameters", "operator" => "AND", "fields" => [
						[ "type"=>"parameter", "parameterName" => "category_id", "fieldName" => "category_id", "comparer" => "=", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "total_prc", "fieldName" => "total_prc", "comparer" => "=", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "payment_dt", "fieldName" => "payment_dt", "comparer" => "=", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "item_nm", "fieldName" => "item_nm", "comparer" => "like", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "shop_nm", "fieldName" => "shop_nm", "comparer" => "like", "compareType" => "item" ],
						[ "type"=>"parameter", "parameterName" => "memo_txt", "fieldName" => "memo_txt", "comparer" => "like", "compareType" => "item" ],
					]
				],
				[ "type" => "operator", "value" => "AND" ],
			],
		],
		"orders" => [
			"default" =>	[ "payment_dt"	=>"desc", "id"	=> "asc" ]
		],
	],
];
