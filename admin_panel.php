<html>
<head>
<title>Admin </title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

#options {
    width: 30%;
	margin: 10px auto;
}

h1 {
	margin: 50px 0;
}

</style>
</head>


<body>

	<nav class="navbar navbar-light bg-light">
	<span class="navbar-brand mb-0 h1">Administrator</span>
  <a class="navbar-brand text-right" href="adminlogout.php">Odjava</a>
</nav>

<div id="header">
<center><img src="assets/img/ikona.jpg">
</center>
</div>

<div id="options">

<a class="btn btn-success btn-block" href="add.php"> Dodaj korisnika </a>
<a class="btn btn-danger btn-block" href="delete.php"> Ukloni korisnika </a>
	
</div>

<div class="container" id="data">
<br><br>

<center><h1>Podaci korisnika:</h1></center>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
	  <th scope="col">Korisničko ime</th>
	  <th scope="col">Email</th>
	  <th scope="col">Lozinka</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php 
    include 'connection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM korisnik";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><th scope='row'>".$row['id']."</th><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['lozinka']."</td><td><a href='izmjeni_korisnika.php' class='btn btn-warning'>Izmjeni</a></td></tr>";
	 }
} else {
    echo "<h3><center>Podaci nisu pronađeni!<center></h3>";
}
  ?>
    </tbody>
</table>

</div>
</body>
</html>