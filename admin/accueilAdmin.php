<?php
/**
 * Created by PhpStorm.
 * User: Carla
 * Date: 07.06.17
 * Time: 10:55
 */

?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>ADMIN - Hydrocontest HEIG-VD</title>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<h1 class="titre">admin</h1>
<div id="menus">
<?php
include 'menu.php';
?>
</div>
<div id="wrapper">
<section id="edition">
<button>Changer Edition</button>
</section>
    <section id="sectionPage">
        <h2>Accueil</h2>
        <div id="accueil_container">
            <p>Texte de la page d'accueil</p>
            <textarea name="message" rows="20" cols="70">Description
            </textarea>
            <div id="accueil_images">
                <input>
            </div>
            <button id="btn_revenir">Menu principal</button>
            <button id="btn_valider">Valider</button>
        </div>
    </section>
</div>
