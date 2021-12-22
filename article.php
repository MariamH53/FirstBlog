<?php
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>articles</title>
</head>
<body>
    <h3 class="text-primary">Affichage Article</h3>

    <div class="container">
        <div class="row">
            <?php
            $sql = "Select * from article join categorie on article.id_catégorie=categorie.id_catégorie";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                
                <div class="col-lg-6"> <!--col:colonne; lg:responsive; kol ligne fil bootstrap 
                                           fiha 12 unités donc honi kol div tekho 6 unités
                                           kol ligne fiha 2 div -->
                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            <?php echo $row["nom_catégorie"] ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["nom_article"] ?></h5>
                            <p class="card-text"><?php echo $row["desc_article"] ?></p>
                        </div>
                    </div>  
                </div>

            <?php } ?>      
        </div>
    </div>

</body>
</html>