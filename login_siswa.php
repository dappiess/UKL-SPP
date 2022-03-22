<?php
session_start();
require_once("koneksi.php");
if(isset($_SESSION['nis'])){
    header("location: dashboard_siswa.php");
} 
if($_POST){
    include
    $nis = $_POST['nis'];
    $cari = mysqli_query($konek, "SELECT * FROM siswa WHERE nis='$nis'");
    $hasil = mysqli_fetch_assoc($cari);
        // Jika data yang dicari kosong
        if(mysqli_num_rows($cari) == 0){
        }else{
        // Jika nisn siswa sesuai dengan database maka akan redirect ke halaman utama dan akan dibuatkan sesi
            $_SESSION['nis'] = $_POST[''];        
            header('location:dashboard_siswa.php');
            echo "<script>alert('NIS isn't exist!!!);</script>";
      }
    }
  
?>
<html>
<head>
  <link rel="stylesheet" href="assets/css/login-siswa.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <br> </br>
  <title>Sign in</title>
</head>
<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form action="" class="form" method="POST">
      <input class="user " type="text" align="center" placeholder="NIS" name="nis">
      <h4 class="log" style ="color: white;"><center>Apakah anda seorang petugas? login 
                                    <a href="login_petugas.php">disini</a>
                            </center>
            </td>
            <br> </br>  
      <button class="submit" align="center" type="submit" name="sign-in">Sign in</button> 
      <p class="label" align="center">SMK TELKOM MALANG</p>   
      <br> </br>
      </form>
        </div>
</body>
</html>
