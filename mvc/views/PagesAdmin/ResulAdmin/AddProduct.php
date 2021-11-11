<form method="POST">
	Username: <input type="text" name="username" value=""/> <br/>
	password: <input type="password" name="password" value=""/><br/>
	<input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
</form>

<?php 
if (isset($_POST['form_click'])){
	echo 'Tên đăng nhập là: ' . $_POST['username'];
	echo '<br/>';
	echo 'Mật khẩu là: ' . $_POST['password'];
}
?>