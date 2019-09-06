<?php 

session_start();


$con = mysqli_connect('localhost','root','','projekt');

mysqli_select_db($con, 'projekt');

$username = $_POST['username'];
$password = $_POST['lozinka'];


$s= "select * from korisnik where username = '$username' && lozinka = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$b= "select * from korisnik where username = '$username' && lozinka = '$password' && user_type = 'admin'";

$res = mysqli_query($con, $b);

$count = mysqli_num_rows($res);

if($count == 1){
    $_SESSION['username'] = $username;
    $_SESSION['lozinka'] = $password;
    header('location:admin_panel.php');
    echo "Uspjesna prijava!)";
}

elseif($num == 1){
    $_SESSION['username'] = $username;
    $_SESSION['lozinka'] = $password;
    header('location:index.php');
    echo "Uspjesna prijava!)";
}

else{
    header('location:prijavatest.php?');
    echo "Pogresna lozinka ili username";
    
}
?>