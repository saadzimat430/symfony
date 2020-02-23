<?php
$db=mysqli_connect("localhost","root","","database");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST ['send'] )) {
    $name= $_POST['firstname'];
    $sujet= $_POST['sujet'];
    $email= $_POST['email'];
    $message= $_POST['subject'];
    $rapport=$_FILES['avatar']['name'];
    

     $sql="INSERT INTO rapport(Nom,Sujet,Email,Mesage,rapport) VALUES(?,?,?,?,?)";
     $stmt = mysqli_stmt_init($db);
     mysqli_stmt_prepare($stmt,$sql);
     mysqli_stmt_bind_param($stmt,"sssss",$name,$sujet,$email,$message,$rapport);
     mysqli_stmt_execute($stmt);

     header('Location: http://localhost:8001/profile');
}
?>
<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="upload.css">
<div class="container">
  <h1>Deposer votre rapport</h1>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
    <label for="image">Deposer votre rapport</label>

    <input type="file" id="avatar" name="avatar">
     <input type="submit" name="send" value="Envoyer">
    
  </form>
</div>
