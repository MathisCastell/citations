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
                                    <li class="nav-item"><a class="nav-link text-white" href="tout.php">Toute la philosophie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="realisme.php">Réalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="idealisme.php">Idéalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="rationalisme.php">Rationalisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="empirisme.php">Empirisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="existentialisme.php">Existentialisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="phenomenologie.php">Phénoménologie</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="structuralisme.php">Structuralisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="poststructuralisme.php">Post-structuralisme</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="deconstruction.php">Déconstruction</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="postmodernisme.php">Post-modernisme</a></li>
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
                <h3 class="row col-12">Toutes les citations de philosophie</h3>
                <p>Choisissez la catégorie que vous voulez voir</p>
                <div class="row col-12">
                    <a href="#structuralisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;">Structuralisme </a> 
                    <a href="#realisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Réalisme </a> 
                    <a href="#rationalisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Rationalisme </a>
                    <a href="#poststructuralisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Post-structuralisme </a> 
                    <a href="#postmodernisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Post-modernisme </a> 
                    <a href="#phenomenologie" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Phenomenologie </a> 
                    <a href="#idealisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Idéalisme </a> 
                    <a href="#existentialisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Existentialisme </a> 
                    <a href="#empirisme" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Empirisme </a> 
                    <a href="#deconstruction" style="display: inline-block; padding: 10px 20px; background-color: #303030; color: white; text-decoration: none; border-radius: 5px;"> Déconstruction </a> 
                </div>
                <br/>
                <h3 id="structuralisme">Le structuralisme</h3>
                <br/>
                <!-- Section de citations déroulantes -->
                <div class="card-deck">
                    <div class="card">
                        <img src="images/strauss.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"La structure, c'est ce qui reste quand on a oublié tout le reste." - Claude Lévi-Strauss</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/barthes.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"L'homme est une structure creuse." - Roland Barthes</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/derrida.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Tout est texte." - Jacques Derrida</p>
                        </div>
                    </div>
                </div>
                
                

                <br/>
            <h3 id="realisme">Le réalisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/sartre.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"L'existence précède l'essence." - Jean-Paul Sartre</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/hegel.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Ce qui est réel est rationnel, et ce qui est rationnel est réel." - Georg Wilhelm Friedrich Hegel</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/dick.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"La réalité est celle qui refuse de disparaître lorsque l'on cesse d'y croire." - Philip K. Dick</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="rationalisme">Le rationalisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/descartes.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Je pense, donc je suis." - René Descartes</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/locke.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"La raison est la seule chose qui nous rend hommes et nous distingue des bêtes." - John Locke</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/kant.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"La raison est la lumière de l'intelligence." - Emmanuel Kant</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="poststructuralisme">Le post-structuralisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/derrida.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Il n'y a rien en dehors du texte." - Jacques Derrida</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/barthes.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"La signification n'est pas dans les choses, mais entre les choses." - Roland Barthes</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/foucault.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"La déconstruction n'est pas la destruction, mais la clarification." - Michel Foucault</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="postmodernisme">Le post-modernisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/lyotard.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Dans la société postmoderne, aucune grande narration n'a de légitimité." - Jean-François Lyotard</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/baudrillard.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"La vérité est une illusion, et l'illusion est la vérité." - Jean Baudrillard</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/derrida.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Il n'y a pas de hors-texte." - Jacques Derrida</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="phenomenologie">La phenomenologie</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/husserl.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Retourner aux choses mêmes." - Edmund Husserl</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/ponty.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"La conscience est toujours conscience de quelque chose." - Maurice Merleau-Ponty</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/sartre.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"L'essence de la conscience est l'intentionnalité." - Jean-Paul Sartre</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="idealisme">L'idéalisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/hegel.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"L'idée est une réalité plus grande que nous." - Georg Wilhelm Friedrich Hegel</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/kant.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"La réalité n'est rien sans l'idée." - Immanuel Kant</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/schelling.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"L'idée est l'unité de l'être et de la pensée." - Friedrich Schelling</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="existentialisme">L'existentialisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/sartre.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"L'existence précède l'essence." - Jean-Paul Sartre</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/sartre.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"L'homme est condamné à être libre." - Jean-Paul Sartre</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/dostoievski.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Chacun de nous est responsable de tout." - Fiodor Dostoïevski</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="empirisme">L'empirisme</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/locke.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Rien n'est dans l'intellect qui n'ait d'abord été dans les sens." - John Locke</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/hume.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"L'expérience, c'est la source de toute connaissance." - David Hume</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/locke.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"Il n'y a rien dans l'esprit qui n'ait d'abord été dans les sens." - John Locke</p>
                        </div>
                    </div>
        </div>
        <br/>
            <h3 id="deconstruction">La deconstruction</h3>
        <br/>
        <!-- Section de citations déroulantes -->
<div class="card-deck">
<div class="card">
                        <img src="images/derrida.jpg" class="card-img-top" alt="Citation 1">
                        <div class="card-body">
                            <p class="card-text">"Il n'y a pas de hors-texte." - Jacques Derrida</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/ricoeur.jpg" class="card-img-top" alt="Citation 2">
                        <div class="card-body">
                            <p class="card-text">"Déconstruire, c'est voir comment les significations se construisent." - Paul Ricoeur</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/derrida.jpg" class="card-img-top" alt="Citation 3">
                        <div class="card-body">
                            <p class="card-text">"La déconstruction est une affirmation constructive." - Jacques Derrida</p>
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
