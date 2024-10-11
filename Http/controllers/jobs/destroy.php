<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$job = $db->query('select * from jobs where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($job['id'] === $currentUserId);

$db->query('delete from jobs where id = :id', [
    'id' => $_POST['id']
]);

header('location: /jobs');
exit();
