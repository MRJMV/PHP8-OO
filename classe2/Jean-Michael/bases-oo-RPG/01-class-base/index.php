<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création et importation d'une classe</title>
</head>

<body>
    <h1>Création et importation d'une classe</h1>
    <h2>Importation</h2>
    <p>Chaque classe devra se trouver dans un fichier unique, qui portera le meme nom que la classe(autoload).</p>
    <p>Nous allons le charger ci-dessous</p>
    <pre><code>
    include"Personnage.php"
    </code></pre>
    <?php include "Personnage.php"; ?>
    <h2>Instanciation d'objet de type Personnage</h2>
    <p>En OO, on instancie (création d'un objet) la classe avec le mot clef "new"</p>
    <pre><code>    
    //Creation de 2 instances de type Personnage
    // dans des alias vers la mémoire ou se trouve l'objet

    $perso1 = new Personnage();
    $perso2 = new Personnage();

    //$perso3 n'est qu'un lien symbolique vers $perso1
    // il faudra utiliser le clonage por faire une copie
    
    $perso3 = $perso1;
    </code></pre>
    <?php
    //Creation de 2 instances de type Personnage
    // dans des alias vers la mémoire ou se trouve l'objet
    $perso1 = new Personnage();
    $perso2 = new Personnage();
    //$perso3 n'est qu'un lien symbolique vers $perso1
    // il faudra utiliser le clonage por faire une copie
    $perso3 = $perso1;
    ?>
</body>

</html>