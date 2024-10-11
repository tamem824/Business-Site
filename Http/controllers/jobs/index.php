<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$jobs = $db->query('select * from jobs ' )->get();


view("jobs/index.view.php", [
    'heading' => 'JOBS',
    'jobs' => $jobs
]);