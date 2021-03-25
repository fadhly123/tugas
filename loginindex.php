<?php
session_start(); // Start session nya
require 'koneksi.php';

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: welcome.php"); // Kita Redirect ke halaman welcome.php
}

?>
<html>
<head>
    <meta charset    = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content="IE=edge">
    <meta name       = "viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Forum Untuk Login</title>
	<style type="text/css">
		*{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    background-image: url(gambar.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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
    color: #DC143C;
    margin-bottom: 30px;
    text-transform:  capitalize;
    border-bottom: 4px solid #696969;
}
.container label{
    text-align: right;
    color: #DC143C;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #696969;
    color: #DC143C;
    font-size: 20px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color: #696969;
    font-size: 18px;
    color: #DC143C;
}

	</style>	
</head>
<body>
	<div class="container">
        <div id="toggle" onclick="showHide();">
            <div class="form-inline col-sm-6 mx-auto mt-5">
          <h1>Login</h1>
            <form  action="login.php" method="post" align= "center">
                <table>

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
        <td><button type="submit" name="submit">Login</button></td>
    <a href="registrasi.php">Daftar di Sini</a>
    </tr>
                </table>
                  </div>
            </form>
        </div>
        <?php 
            if (isset($_COOKIE["message"])){
                echo $_COOKIE["message"];
            }
        ?>

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
