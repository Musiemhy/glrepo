<?php
class DB extends DBmysql {
   public $dbhost = '127.0.0.1';
   public $dbuser = 'glpi_user';
   public $dbport = '3306';
   public $dbpassword = 'Abcd@1234!QAZ';
   public $dbdefault = 'glpi_db';
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
   public $use_timezones = true;
}
