<?php
return [

	// Databases

	"databases"	=> [
		"sqlite"			=> [ "tableName" => "user", "keyName" => "id" ],
	],

	// Parameters

	"parameters" => [
		"user_nm" 			=> [],
		"password_txt"		=> [ "format" => "MD5" ],
	],

	// Fields

	"fields"	=> [
		"user_nm"			=> [],
		"password_txt"		=> [],
	],

];
