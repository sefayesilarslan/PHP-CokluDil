<?php
session_start();
include("dil.php");

$dilim=new dilyonetim();
$dilim->dilgetir($_SESSION["dil"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>ÇOKLU DİL</title>
</head>
<body>
<div  class="container text-center">
            <div class="row mt-5">
                        <div class="col-lg-12 border border-dark"><a href="index.php?dil=tr" class="btn btn-dark m-2">Türkçe</a>  <a href="index.php?dil=en" class="btn btn-dark m-2">İngilizce</a>  <a href="index.php?dil=al" class="btn btn-dark m-2">Almanca</a>  
                    </div>

 		  </div>


		<div class="row mt-1">
        
        <div class="col-lg-10"><?php echo $dilim->veriler["icerik"]; ?></div>
        
        
        <div class="col-lg-2 text-left">
        <h5><?php echo $dilim->veriler["link_1"]; ?></h5>
        <h5><?php echo $dilim->veriler["link_2"]; ?></h5>
        <h5><?php echo $dilim->veriler["link_3"]; ?></h5>
        <h5><?php echo $dilim->veriler["link_4"]; ?></h5>
        <h5><?php echo $dilim->veriler["link_5"]; ?></h5>
        </div>
        
        
  		</div>

</div>

<?php 

@$dil=$_GET["dil"];

switch ($dil){

    case "tr":
    case "en":
    case "al":
        $_SESSION["dil"]=$dil; //tarayıcı kapanana kadar o dilde kalacak
        header("Location:index.php");
    
    break;
}
?>
    
</body>
</html>