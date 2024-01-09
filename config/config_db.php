<?php
class DB extends DBmysql {
   public $dbhost = 'mariadb';
   public $dbuser = 'root';
   public $dbpassword = 'diouxx';
   public $dbdefault = 'glpidb';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
