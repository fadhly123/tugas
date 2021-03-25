<?php 
require "koneksi.php";
if(isset ($_POST["submit"]) ) {	

	$id_akun      = htmlspecialchars($_POST[  "id_akun"   ]);	
	$username     = htmlspecialchars($_POST[  "username"  ]);
	$password     = htmlspecialchars($_POST[  "password"  ]);
	$nama_akun    = htmlspecialchars($_POST[  "nama_akun" ]);
	$password = md5($password);

	$query  = "INSERT INTO tb_akun (username, password, nama_akun) VALUES ('$username', '$password', '$nama_akun')";

	$result = mysqli_query($conn, $query);

	if(	$result) {
	echo "
	<script>
		alert('Registrasi Berhasil');
		document.location.href = 'login.php';
	</script>
	";

} else {
	echo "
	<script>
		alert('Registrasi Gagal');
		document.location.href = 'login.php';
	</script>
	";
}
}


?>
<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset    = "UTF-8">
	<meta http-equiv = "X-UA-Compatible" content="IE=edge">
	<meta name       = "viewport" content="width=device-width, initial-scale=1.0">
	<title>Forum Untuk Register</title>
	<style type="text/css">
		*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(https://dosenit.com/wp-content/uploads/2020/10/Gunung-Fuji-Jepang-1024x640-1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: white;
  font-family: 'Open Sans', sans-serif;
  padding-top: 10px;
}

h1 {
  text-align: center;
  padding-left: 100px;
  padding-bottom: 20px;
}

a {
  color: white;
  font-family: 'Open Sans', sans-serif;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #752BEA;
}
.container label{
    text-align: left;
    color: #90caf9;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #752BEA;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    background-color:#752BEA;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}


	</style>	
</head>
	
<body>
	<div class="container">
		<div id="toggle" onclick="showHide();">
			<div class="form-inline col-sm-6 mx-auto mt-5">
          <h1>Daftar </h1>
            <form  action="" method="post" align= "center">
            	<table>
<tr>
	<td>
		<label for="nama_akun">Nama Akun</label>
	</td>
	<td>
		<input type="text" name="nama_akun" id="nama_akun">
	</td>
</tr>
                <tr>
		<td>
			<label for="username">Username</label>
		</td>
		<td>
			<input type="text" name="username" id="username" >
		</td>
	</tr>
	<tr>
		<td>			
   <label for="pass">Password</label>
		<td>
			 <input type="password" name="password" id="password" class="form-control ml-2 mr-2">
   <input type="checkbox" id="show-password"> Tampilkan Password
		</td>
		
	</tr>
	<tr>
		<td><button type="submit" name="submit">Daftar</button></td>\
		<tr>		
	<a href="loginindex.php">Login di Sini</a>
	</tr>
             	</table>
             	  </div>
            </form>
        </div>

       <!-- jquery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){  
   $('#show-password').click(function(){
    if($(this).is(':checked')){
     $('#password').attr('type','text');
    }else{
     $('#password').attr('type','password');
    }
   });
  });
 </script>
</body>
</html>