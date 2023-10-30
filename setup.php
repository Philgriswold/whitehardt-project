<?php

require_once('setup.php');

$db = new SQLite3('database.db');

$query = "
    CREATE TABLE IF NOT EXISTS records (
        id INTEGER PRIMARY KEY,
        name TEXT,
        company TEXT,
        created_time DATETIME,
        updated_time DATETIME,
        tracking_phone_number TEXT
    )
";

$db->exec($query);

echo "Database and table created successfully.";
?>