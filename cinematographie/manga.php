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
                                    <li class="nav-item"><a class="nav-link text-white" href="tout.php">Toute l'histoire</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="antiquite.php">Antiquité</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="moyenage.php">Moyen Âge</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="moderne.php">Époque moderne</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="contemporaine.php">Époque contemporaine</a></li>
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
                <h3 class="row col-12">Toutes nos citations de manga</h2>
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
                </div> 

<div class="col-12 col-md-2"> 
</div> 
<div class="col-12 col-md-10">


<br/>

</div>
</br></br></br></br></br></br>
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
