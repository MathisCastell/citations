<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site de Citations</title>
    <!-- le css de la page -->
    <link rel="stylesheet" type="text/css" href="../styles.css">
    
    <!-- Inclure Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-2">
                <button class="btn text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                </button>
                <div class="collapse navbar-collapse flex-column" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="../accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-toggle="collapse" href="#historiqueSubmenu" role="button" aria-expanded="false" aria-controls="historiqueSubmenu">Historique</a>
                            <div class="collapse" id="historiqueSubmenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/tout.php">Toute l'histoire</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/prehistoire.php">Préhistoire</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/antiquite.php">Antiquité</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/moyenage.php">Moyen Âge</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/moderne.php">Époque moderne</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../histoire/contemporaine.php">Époque contemporaine</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-toggle="collapse" href="#philosophiqueSubmenu" role="button" aria-expanded="false" aria-controls="philosophiqueSubmenu">Philosophique</a>
                            <div class="collapse" id="philosophiqueSubmenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/tout.php">Toute la philosophie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/realisme.php">Réalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/idealisme.php">Idéalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/rationalisme.php">Rationalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/empirisme.php">Empirisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/existentialisme.php">Existentialisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/phenomenologie.php">Phénoménologie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/structuralisme.php">Structuralisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/poststructuralisme.php">Post-structuralisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/deconstruction.php">Déconstruction</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../philosophie/postmodernisme.php">Postmodernisme</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-toggle="collapse" href="#cinematographiqueSubmenu" role="button" aria-expanded="false" aria-controls="philosophiqueSubmenu">Cinématographie</a>
                            <div class="collapse" id="cinematographiqueSubmenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link text-white" href="../cinematographie/tout.php">Toute la Cinematographie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../cinematographie/manga.php">Manga</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../cinematographie/serie.php">Série</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../cinematographie/film.php">Film</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-toggle="collapse" href="#noscitationsSubmenu" role="button" aria-expanded="false" aria-controls="philosophiqueSubmenu">Nos citations</a>
                            <div class="collapse" id="noscitationsSubmenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link text-white" href="tout.php">Toute les citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="citationsstaff.php">Nos citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="citationsmembres.php">Vos citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="citationsia.php">Les citations des IA</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item active text-white">
                            <a class="nav-link text-white" href="../contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-10">
                <h1 class="row col-12">Bienvenue sur notre site de citations !</h1>
                <h3 class="row col-12">Nos citations créées</h3>
                <p>Choisissez la catégorie que vous voulez voir</p>
                <div class="row col-12">
                    <a href="#membre" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Vos citations </a> 
                    <a href="#staff" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Nos citations </a> 
                    <a href="#ia" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Les citations des IA</a>
                </div>
                <br/>
            <h3 id="membre">Vos citations</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/banane.gif" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Luzento, j'ai fait l'entrainement spécial, tu verras mon reset molette. On va box fight et tu m'offres un skin ?" - Banane</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/obitouchiha.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"A genoux ou la mort. Choisis ton camp." <br/><br/> "Si tu veux je te fais une réduction de 1% sur mon entrainement spécial Nathan. Il ne te coutera que 990 euros" - NathanNet</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/joseph.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Tu sais, hier j'ai pleuré dans mon lit car je regrettais d'avoir choisis Adler." - Luzento</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="staff">Nos citations</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
                    <div class="card">
                        <img src="images/jonathan2.gif" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"On ne vit pas après m'avoir fait un coup pareil, on attend mon retour." - Echo Khan</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/jotaro.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Notre PayPal ? On vous le laisse si vous voulez. Trouvez le, il est caché quelque part dans ce monde." - Pistache</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <img src="images/jonathan.gif" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Quel chien, il ne passera pas la semaine." - Echo Khan</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="IA">Les citations des IA</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/bing.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"L’intelligence artificielle n’est pas une menace pour l’humanité, mais une opportunité de la transcender." - Bing</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/bing.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"L’intelligence artificielle est l’art de donner aux machines la capacité de comprendre, de créer et de collaborer avec les humains." - Bing</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/bing.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"L’intelligence artificielle est la science de créer des machines qui apprennent à partir de leurs expériences, comme les humains, mais en mieux." - Bing</p>
                        </div>
                    </div>
        </div>
</br>
</div>
</div>
</div>
</div>
</div>
    <!-- Ajout du pied de page -->
    <footer>
        <div class="col-12 col-md-6">
            <div class="row">
                <div class="col-12 col-md-6">
                    <br/>
                    <p class="text-white">Site de citations réalisé par L.A</p>
                </div>
                <div class="col-12 col-md-6">
                <br/>
                    <p class="text-white">Suivez-nous sur les réseaux sociaux :</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-white">Facebook</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Twitter</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
