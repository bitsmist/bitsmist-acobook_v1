CREATE TABLE IF NOT EXISTS "user" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"create_dt"	TEXT,
	"update_dt"	TEXT,
	"delete_dt"	TEXT,
	"user_nm"	TEXT,
	"password_txt"	TEXT
);
CREATE TABLE sqlite_sequence(name,seq);
CREATE TABLE IF NOT EXISTS "account" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"create_dt"	TEXT,
	"update_dt"	TEXT,
	"delete_dt"	TEXT,
	"account_nm"	TEXT,
	"inout_cd"	TEXT,
	"sort_no"	INTEGER
);
CREATE TABLE IF NOT EXISTS "category" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"create_dt"	TEXT,
	"update_dt"	TEXT,
	"delete_dt"	TEXT,
	"category_nm"	TEXT,
	"sort_no"	INTEGER
);
CREATE TABLE IF NOT EXISTS "transaction" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"create_dt"	TEXT,
	"update_dt"	TEXT,
	"delete_dt"	TEXT,
	"user_id"	INTEGER,
	"payment_dt"	TEXT,
	"from_account_id"	INTEGER,
	"to_account_id"	INTEGER,
	"category_id"	INTEGER,
	"total_prc"	NUMERIC,
	"item_nm"	TEXT,
	"shop_nm"	TEXT,
	"memo_txt"	TEXT
);
CREATE TABLE IF NOT EXISTS "favorite" (
	"id"	INTEGER PRIMARY KEY AUTOINCREMENT,
	"create_dt"	TEXT,
	"update_dt"	TEXT,
	"delete_dt"	TEXT,
	"payment_dt"	TEXT,
	"from_account_id"	INTEGER,
	"to_account_id"	INTEGER,
	"category_id"	INTEGER,
	"item_nm"	TEXT,
	"shop_nm"	TEXT,
	"total_prc"	INTEGER,
	"memo_txt"	TEXT,
	"sort_no"	INTEGER,
	"title"	TEXT
);
