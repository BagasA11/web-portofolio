<?php
$data = file_get_contents('json\skill.json');
$skill = json_decode($data, true);
$skill = $skill['skill'];
?>