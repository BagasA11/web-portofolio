<?php 
require 'retrieving\project.php';

foreach ($project as $item):
    if(password_verify($item['id'], $_GET['encrypt']))
    {
        download($item['file']);
    }
endforeach;
?>

<?php 
function download(String $file)
{
    if (isset($file)) {
        $path = "asset/repository/" . $file;
        header("Content-type:application/zip");
        header("Content-Disposition: attachment; filename = " . $file);
        readfile($path);
        return "succes"; 
    } else {
        return "404 Not Found";
    }
} 
?>
<html>
    <a href="/">back</a>
</html>