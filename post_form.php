<?
if(isset($_POST['sub'])){
$login = $_POST['login'];
$password = $_POST['password'];
if ($login == 'admin' and $password == 'root'){
	echo "You Enter";
	header('Location:http://prikolol.16mb.com/site/');
}else{
	echo "<div class=Error>password not</div>";
	}
}	
?>

<form class="login-form" method="Post">
      <input type="text" placeholder="username" name="login"/>
      <input type="password" placeholder="password" name="password"/>
      <button name="sub">login</button>
</form>	