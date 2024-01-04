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
                                    <li class="nav-item"><a class="nav-link text-white" href="tout.php">Toute la Cinematographie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="manga.php">Manga</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="serie.php">Série</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="film.php">Film</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-toggle="collapse" href="#noscitationsSubmenu" role="button" aria-expanded="false" aria-controls="philosophiqueSubmenu">Nos citations</a>
                            <div class="collapse" id="noscitationsSubmenu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a class="nav-link text-white" href="../noscitations/tout.php">Toute les citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../noscitations/citationsstaff.php">Nos citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../noscitations/citationsmembres.php">Vos citations</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="../noscitations/citationsia.php">Les citations des IA</a></li>
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
                <h3 class="row col-12">Nos citations cinématographique</h3>
                <p>Choisissez la catégorie que vous voulez voir</p>
                <div class="row col-12">
                    <a href="#film" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;">Film </a> 
                    <a href="#manga" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Manga </a> 
                    <a href="#serie" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Série</a>
                </div>
                <br/>
            <h3 id="film">Les films</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/joker.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"La seule façon raisonnable de vivre en ce bas monde, c'est en dehors des règles." - Le Joker dans The Dark Knight</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/alfred.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Certains hommes sont sans but logique. On ne peut les acheter, les intimider, les raisonner ou négocier avec eux. Certains hommes veulent juste voir le monde brûler." - Alfred Pennyworth dans The Dark Knight</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/arthurfleck.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Avant, je me disais que ma vie était une tragédie. Je me rends compte que c’est une comédie." - Arthur Fleck dans Joker</p>
                        </div>
                    </div>
        </div>

                
     
                <br/>
            <h3  id="manga">Les mangas</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/madara.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Dans ce monde, partout où il y a la lumière – il y a aussi des ombres. Tant que le concept de gagnants existe, il doit aussi y avoir des perdants. Le désir égoïste de vouloir maintenir la paix provoque les guerres et la haine est née pour protéger l’amour." - Madara Uchiha dans Naruto</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/lightyagami.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Je débarasse le monde du mal et crée une Utopie. Peu importe le temps dont je dispose, cela ne suffira pas." - Light Yagami dans Death Note</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/jonathanjoestar.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Dio, comme tu l’as dit, nos destins sont liés. Je ressens une étrange chaleur pour toi." - Jonathan Joestar dans Jojo's Bizarre Adventure</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="serie">Les séries</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/ragnar.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"J’espère qu’un jour nos Dieux pourront devenir amis." - Ragnar Lothbrok dans Vikings</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/homelander.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Le monde est rempli de faiblesses, et je suis là pour les corriger. Les règles ne s'appliquent pas à moi." - Homelander dans The Boys</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/ragnar.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Le monde change et nous devons changer avec lui." - Ragnar Lothbrok dans Vikings</p>
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
