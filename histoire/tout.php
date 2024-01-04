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
            <div class="col-12 col-md-2 height-100">
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
                <h3 class="row col-12">Toutes les citations historiques</h3>
                <p>Choisissez la catégorie que vous voulez voir</p>
                <div class="row col-12">
                    <a href="#antiquite" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Antiquité </a> 
                    <a href="#moyenage" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Moyen-Âge</a>
                    <a href="#moderne" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Epoque moderne </a> 
                    <a href="#contemporaine" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Epoque contemporaine</a>
                </div>
                <br/>
                <h3>L'Antiquité</h3>
                <br/>
                <!-- Section de citations déroulantes -->
                <div class="card-deck" id="antiquite">
                        <div class="card">
                            <img src="images/alexandertg.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Ce ne sont pas les fils qui perpétuent la mémoire des pères, ce sont les bonnes actions & les bonnes mœurs. Il ne serait pas aussi de la grandeur d'un Conquérant, comme moi , de se laisser vaincre par des femmes, après avoir vaincu tout l'Univers." - Alexandre le Grand</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/alexandertg.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Si je n'étais Alexandre, je serais Diogène." - Alexandre le Grand</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/alexandertg.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Le soleil ne se couche pas sur mon Empire." - Alexandre le Grand</p>
                            </div>
                        </div>
                        </div> 

                
     
                <br/>
                
                <!-- Section de citations déroulantes -->
                <div class="card-deck" id="prehistoire">
                        <div class="card">
                            <img src="images/leonidas.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Viens les prendre." - Leonidas de Sparte</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/laotseu.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Le plus grand conquérant est celui qui sait vaincre sans bataille." - Lao Tseu</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/suntzu.jpg" class="card-img-top" alt="Citation 1">
                            <div class="card-body">
                                <p class="card-text">"Celui qui excelle à résoudre les difficultés le fait avant qu'elles ne surviennent." - Sun Tzu</p>
                            </div>
                        </div>
                        </div>
                        
                        <br/>
                <h3>Le Moyen-Âge</h3>
<br/>
<!-- Section de citations déroulantes -->
<div class="card-deck" id="moyenage">
<div class="card">
                        <img src="images/gengiskhan.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Il ne suffit pas que je réussisse - tous les autres doivent échouer." - Gengis Khan</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/gengiskhan.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"La force d’un mur n’est ni plus ni moins que le courage des hommes qui le défendent." - Gengis Khan</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/gengiskhan.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Si vous n’aviez pas commis de grands péchés, Dieu n’aurait pas envoyé une punition comme moi sur vous." - Gengis Khan</p>
                        </div>
                    </div>
        </div>
        

        <br/>
                <h3>L'Epoque Moderne</h3>
<br/>
<!-- Section de citations déroulantes -->
<div class="card-deck" id="moyenage">
    <div class="card">
            <img src="images/jeannedarc.jpg" class="card-img-top" alt="Citation 1">
            <div class="card-body">
                <p class="card-text">"Les deux ailes de nos âmes, qu'aucun coup de vent ne casse, sont l'amour et la foi." - Jeanne d'Arc</p>
            </div>
        </div>
        <div class="card">
            <img src="images/charlesmartel.jpg" class="card-img-top" alt="Citation 1">
            <div class="card-body">
                <p class="card-text">"Tel au combat sera ce grand Martel Qui, plein de gloire et d'honneur immortel, Perdra du tout par mille beaux trophées Des Sarrasins les races étouffées, Et des Français le nom victorieux Par sa prouesse enverra jusqu'aux cieux." - Charles Martel</p>
            </div>
        </div>
        <div class="card">
            <img src="images/charlemagne.jpg" class="card-img-top" alt="Citation 1">
            <div class="card-body">
                <p class="card-text">"La philosophie antique nous apprenait à accepter notre mort. La philosophie moderne, la mort des autres." - Charlemagne</p>
            </div>
        </div>
        </div>
        

        
<br/>
<!-- Section de citations déroulantes -->
<div class="card-deck" id="moderne">
<div class="card">
                        <img src="images/leonarddevinci.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"La peinture est une poésie qui se voit au lieu de se sentir et la poésie est une peinture qui se sent au lieu de se voir." - Léonard de Vinci</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/saintaugustin.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Le monde est un livre, et ceux qui ne voyagent pas n'en lisent qu'une page." - Saint Augustin</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/leonarddevinci.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"L'art est la fille de la nature." - Léonard de Vinci</p>
                        </div>
                    </div>
                    
        </div>
        <br/>
            <h3>L'Epoque Contemporaine</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck" id="contemporaine">
<div class="card">
                        <img src="images/napoleon.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Il y a plus de chances de rencontrer un bon souverain par l'hérédité que par l'élection." - Napoléon Bonaparte</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/napoleon.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Le cœur d'un homme d'Etat doit être dans la tête." - Napoléon Bonaparte</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/napoleon.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Le mensonge n'est bon à rien, puisqu'il ne trompe qu'une fois." - Napoléon Bonaparte</p>
                        </div>
                    </div>
        </div>
        <br/>
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
