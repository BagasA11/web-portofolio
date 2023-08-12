<?php
$data = file_get_contents('json\project.json');
$project = json_decode($data, true);
$project = $project['project'];
?>