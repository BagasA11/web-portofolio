<?php
$data = file_get_contents('json\certificate.json');
$certificate = json_decode($data, true);
$certificate = $certificate['certificate'];
?>