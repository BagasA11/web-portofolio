<?php
$data = file_get_contents('json\topic.json');
$topic = json_decode($data, true);
$topic = $topic['topic'];
?>