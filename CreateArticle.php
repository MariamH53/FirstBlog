<?php 
session_start();
include("config.php");
if (isset($_POST["nom_article"])){
    $nom=$_POST["nom_article"];
    $desc=$_POST["description_article"];
    $idCat=$_POST["catégorie"];
    
    $sql="INSERT INTO article(id_article,nom_article,desc_article,id_catégorie) VALUES (null,'$nom','$desc','$idCat')";
    if( mysqli_query($con,$sql)){
    }
    else{
       echo mysqli_error($con);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Création Article</title>
</head>
<body>
<?php 

    if(isset($_SESSION["email"])){
        if($_SESSION["rôle"]!="Admin")
        {
            echo 'you are not allowed';
        }
        else{
    ?>

<form action="" method="POST" style="width: 30%;margin:auto">
 
 <div class="form-group">
   <label for="exampleInputPassword1">Nom Article</label>
   <input type="text" name="nom_article" class="form-control" id="exampleInputPassword1" required>
 </div>
  
 <div class="form-group">
   <label for="exampleInputPassword1">Description Article</label>
   <textarea name="description_article" class="form-control"  cols="30" rows="10" required></textarea>
 </div>
  
 <div class="form-group">
   <label for="exampleInputPassword1">  Catégorie</label>
<select name="catégorie" id="" class="form-control">
    <?php
    $sql="Select * from categorie order by nom_catégorie";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){ ?>

        <option value="<?php echo $row["id_catégorie"]?>"><?php echo $row["nom_catégorie"] ?></option>
       
        <?php
        } ?>  

</select> </div>

 <button type="submit" class="btn btn-primary">Ajouter article</button>
</form>
<?php  }} else{



header("Location:login.php");
} 


?>
</body>
</html>
