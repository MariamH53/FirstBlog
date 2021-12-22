<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blogcs";
$con=mysqli_connect($servername,$username,$password,$dbname);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/phone.ico" width="50px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="categorie.php">Ajouter Catégorie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CreateArticle.php">Ajouter Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="article.php">Voir Articles</a>
      </li>


    </ul>

  </div>
</nav> 