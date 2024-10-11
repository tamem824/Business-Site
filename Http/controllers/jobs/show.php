<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);



$job = $db->query('select * from jobs where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


view("jobs/show.view.php", [
    'heading' => 'job',
    'job' => $job
]);
