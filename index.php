<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ma bibliothèque</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php $bdd = new PDO('mysql:host=jcgrapk.cluster029.hosting.ovh.net;dbname=jcgrapk43;charset=utf8', 'pierre.durand', 's3cr3t');?>
    <?php include 'header.php'?>
    <section class="listeLivres">
        <article class="livre">
            <h2>Les rivières pourpres</h2>
            <div class="auteur">Jean-Christophe Grangé</div>
            <div class="secondaryInfos">
                <div class="nbPages">255 pages</div>
                <div class="style">Polar</div>
            </div>
        </article>
        <article class="livre">
            <h2>Le vol des cigognes</h2>
            <div class="auteur">Jean-Christophe Grangé</div>
            <div class="secondaryInfos">
                <div class="nbPages">255 pages</div>
                <div class="style">Polar</div>
            </div>
        </article>
        <article class="livre">
            <h2>Les rivières pourpres</h2>
            <div class="auteur">Jean-Christophe Grangé</div>
            <div class="secondaryInfos">
                <div class="nbPages">255 pages</div>
                <div class="style">Polar</div>
            </div>
        </article>
        <article class="livre">
            <h2>Les rivières pourpres</h2>
            <div class="auteur">Jean-Christophe Grangé</div>
            <div class="secondaryInfos">
                <div class="nbPages">255 pages</div>
                <div class="style">Polar</div>
            </div>
        </article>
    </section>
</body>
</html>