<?php

namespace App\Models;

use Core\Database;

class Task {
    public static function all() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM tasks ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public static function create($title) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO tasks (title) VALUES (?)");
        $stmt->execute([$title]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
    }
}
