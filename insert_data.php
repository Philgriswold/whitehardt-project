<?php
$db = new SQLite3('database.db');

// Create an array of 10 example users
$users = [
    [
        'name' => "John Doe",
        'company' => "Apple",
        'created_time' => date("Y-m-d H:i:s"),
        'updated_time' => date("Y-m-d H:i:s"),
        'tracking_phone_number' => "555-123-4567"
    ],
    [
        'name' => "Jane Smith",
        'company' => "Samsung",
        'created_time' => date("Y-m-d H:i:s"),
        'updated_time' => date("Y-m-d H:i:s"),
        'tracking_phone_number' => "555-987-6543"
    ],
    [
        'name' => "David Wilson",
        'company' => "Uber",
        'created_time' => date("Y-m-d H:i:s"),
        'updated_time' => date("Y-m-d H:i:s"),
        'tracking_phone_number' => "555-333-3333"
    ],
    [
        'name' => "Jessica Miller",
        'company' => "Lyft",
        'created_time' => date("Y-m-d H:i:s"),
        'updated_time' => date("Y-m-d H:i:s"),
        'tracking_phone_number' => "555-444-4444"
    ],
    [
        'name' => "Michael Johnson",
        'company' => "Microsoft",
        'created_time' => date("Y-m-d H:i:s"),
        'updated_time' => date("Y-m-d H:i:s"),
        'tracking_phone_number' => "555-555-5555"
    ],
    [
        'name' => "William Jones",
        'company' => "Oracle",
        'created_time' => "2023-01-26 14:30:00",
        'updated_time' => "2023-10-26 14:30:00",
        'tracking_phone_number' => "555-666-6666"
    ],
    [
        'name' => "Jennifer Taylor",
        'company' => "HCA",
        'created_time' => "2023-02-15 10:45:00",
        'updated_time' => "2023-09-15 10:45:00",
        'tracking_phone_number' => "555-777-7777"
    ],
    [
        'name' => "Sarah Brown",
        'company' => "Vanderbilt",
        'created_time' => "2023-01-03 18:20:00",
        'updated_time' => "2023-08-03 18:20:00",
        'tracking_phone_number' => "555-888-8888"
    ],
    [
        'name' => "Dan Osborne",
        'company' => "Belmont",
        'created_time' => "2023-03-21 08:15:00",
        'updated_time' => "2023-07-21 08:15:00",
        'tracking_phone_number' => "555-999-9999"
    ],
    [
        'name' => "Nathan ",
        'company' => "Facebook",
        'created_time' => "2023-02-10 16:50:00",
        'updated_time' => "2023-06-10 16:50:00",
        'tracking_phone_number' => "555-101-1010"
    ]
];

// Loop through the array and insert each user
foreach ($users as $user) {
    $query = $db->prepare("INSERT INTO records (name, company, created_time, updated_time, tracking_phone_number) VALUES (:name, :company, :created_time, :updated_time, :tracking_phone_number)");

    $query->bindParam(':name', $user['name'], SQLITE3_TEXT);
    $query->bindParam(':company', $user['company'], SQLITE3_TEXT);
    $query->bindParam(':created_time', $user['created_time'], SQLITE3_TEXT);
    $query->bindParam(':updated_time', $user['updated_time'], SQLITE3_TEXT);
    $query->bindParam(':tracking_phone_number', $user['tracking_phone_number'], SQLITE3_TEXT);

    $query->execute();
}

echo "Data inserted successfully for 10 users.";
?>