<?php

namespace Core;

use PDO;

class Database {
    public static function connect() {
        return new PDO("pgsql:host=localhost;port=5432;dbname=todo_db", "postgres", "fahim12");
    }
}
