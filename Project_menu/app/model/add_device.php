<?php
session_start();
require_once("./common/database.php");
try{
  $con_PDO = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
}catch (PDOException $e){
  echo($e -> getMessage());
}
?>
<?php
if (isset($_POST["button"])){
  if ($_POST["button"] == "Sent"){
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="add">
    <form action="submit" method="POST">
    <span href="">Tên sản phẩm: <input type="name"></span>
    <button type="submit">Sent</button>
  </form>
  <?php
  ?>
</div>
</body>
</html>
