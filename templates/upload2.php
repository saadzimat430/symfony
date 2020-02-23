<?php
$db=mysqli_connect("localhost","root","","database");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST ['send'] )) {
    $nom= $_POST['firstname'];
    $sujet= $_POST['sujet'];
    $email= $_POST['email'];
    $demande=$_FILES['avatar']['name'];
    

     $sql="INSERT INTO demandesoutenance(nom,sujet,email,demande) VALUES(?,?,?,?)";
     $stmt = mysqli_stmt_init($db);
     mysqli_stmt_prepare($stmt,$sql);
     mysqli_stmt_bind_param($stmt,"ssss",$nom,$sujet,$email,$demande);
     mysqli_stmt_execute($stmt);

     header('Location: http://localhost:8001/profile');
}
?>

<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="upload.css">
<div class="container">
  <h1>Formulaire de demande de soutenance</h1>
  <form action="upload2.php" method="post" enctype="multipart/form-data">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="image">Deposer votre demande de soutenance</label>

    <input type="file" id="avatar" name="avatar">
    <input type="submit" name="send" value="Envoyer">
    
  </form>
</div>