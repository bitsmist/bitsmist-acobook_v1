<?php
unset($current["router"]["routes"]);

return [
	// -------------------------------------------------------------------------
	//	Router
	// -------------------------------------------------------------------------

	"router" => [
		"routes" => [
			"readonly" => [
				"method" => "GET",
				"route" =>"/v{appVer}/{resource:accounts|categories|authentications|stats}/{id}.{format}",
				"handler" => "default",
			],
			"readwrite" => [
				"method" => "OPTIONS,PUT,POST,GET",
				"route" =>"/v{appVer}/{resource:transactions|favorites}/{id}.{format}",
				"handler" => "default",
			],
			"remove" => [
				"method" => "DELETE",
				"route" =>"/v{appVer}/{resource:transactions|favorites|authentications}/{id}.{format}",
				"handler" => "default",
			],
		]
	],

	// -------------------------------------------------------------------------
	//	Options
	// -------------------------------------------------------------------------

    "options" => [
		"name" => "api.dev.acobook.com",
		"allowedOrigins" => [
			"http://dev.acobook.com",
			"chrome-extension://eipdnjedkpcnlmmdfdkgfpljanehloah"
		],
		"extraHeaders" => [
			"Access-Control-Allow-Credentials" => "true",
		],
		"session" => [
			"cookieName"	=> "acobook-dev-sid",
			"cookieOptions"	=> [
				"domain"	=> ".api.dev.acobook.com",
				"path"		=> "/",
				"expires" => time() + 60 * 60 * 24 * 7, // One week
			],
			"user" => [
				"idName"	=> "id",
			],
		],
		"query" => [
			"specialParameters" => [
				"list" => "list",
				"new" => "new",
				"order" => "_order",
				"limit" => "_limit",
				"offset" => "_offset",
			],
		],
		"body" => [
			"specialParameters" => [
				"items" => "items"
			],
		],
	],

	// -------------------------------------------------------------------------
	//	Services
	// -------------------------------------------------------------------------

	"logger" => [
		"uses" => [
			"debugLogger"
		]
	],

	"db"	=> [
		"uses" => [
			"sqlite"
		]
	],

	// -------------------------------------------------------------------------
	//	Plugins
	// -------------------------------------------------------------------------

	"debugLogger" => [
		"className"			=> "Bitsmist\\v1\Plugins\Logger\FileLogger",
		"level"				=> "debug",
		"baseDir"			=> __DIR__ . "/../log/",
		"fileName"			=> "acobook_debug.log",
	],

	"warningLogger" => [
		"className"			=> "Bitsmist\\v1\Plugins\Logger\FileLogger",
		"level"				=> "emergency",
		"baseDir"			=> __DIR__ . "/../log/",
		"fileName"			=> "acobook_warning.log",
	],

	"sqlite" => [
		"className"			=> "Bitsmist\\v1\Plugins\Db\PdoDb",
		"type"				=> "SQLITE",
		"dsn"				=> "sqlite:" . __DIR__ . "/../db/acobook.db",
		"user"				=> "",
		"password"			=> ""
	]

];
