<?php
/**
 *
 * Schema definition for "fanwall"
 *
 * Last update: 2019-06-17
 *
 */
$schemas = (!isset($schemas)) ? [] : $schemas;
$schemas["fanwall"] = [
    "fanwall_id" => [
        "type" => "int(11) unsigned",
        "auto_increment" => true,
        "primary" => true,
    ],
    "value_id" => [
        "type" => "int(11) unsigned",
        "foreign_key" => [
            "table" => "application_option_value",
            "column" => "value_id",
            "name" => "FANWALL_VID_AOV_VID",
            "on_update" => "CASCADE",
            "on_delete" => "CASCADE",
        ],
        "index" => [
            "key_name" => "KEY_VALUE_ID",
            "index_type" => "BTREE",
            "is_null" => false,
            "is_unique" => false,
        ],
    ],
    "radius" => [
        "type" => "float(11) unsigned",
        "is_null" => true,
        "default" => "10.00",
    ],
    "design" => [
        "type" => "varchar(10)",
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
        "default" => "list",
    ],
    "icon_topics" => [
        "type" => "varchar(255)",
        "is_null" => true,
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
    ],
    "icon_nearby" => [
        "type" => "varchar(255)",
        "is_null" => true,
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
    ],
    "icon_map" => [
        "type" => "varchar(255)",
        "is_null" => true,
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
    ],
    "icon_gallery" => [
        "type" => "varchar(255)",
        "is_null" => true,
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
    ],
    "icon_post" => [
        "type" => "varchar(255)",
        "is_null" => true,
        "charset" => "utf8",
        "collation" => "utf8_unicode_ci",
    ],
];