<?php
namespace App\System;

class Utils {
	private static $DB = null;
	private static $TEMP = null;

	static function getDB() {
		if(!self::$DB) {
			self::$DB = new \mysqli(DB['host'], DB['username'], DB['password'], DB['name']);
			self::$DB->set_charset('utf8');
		}
		return self::$DB;
	}

	static function getTempDir() {
		if(!self::$TEMP) {
			self::$TEMP = rtrim(sys_get_temp_dir(), '/').'/'.DIR['temp'];
			if(!file_exists(self::$TEMP)) mkdir(self::$TEMP);
		}
		return self::$TEMP;
	}
}
?>