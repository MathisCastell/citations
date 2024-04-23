lien du site :

http://citationsfrance.great-site.net

Continuité :

Site toujours en ligne le 23/04 :

![image](https://github.com/MathisCastell/citations/assets/148212506/1d6b4ea3-a66c-4bae-aef5-e42d262d14fd)


# Utilisation :

HTML

CSS

Eléments bootstrap.

# Explication de la Page Index HTML

## Déclaration du Type de Document
Le code commence par déclarer le type de document avec `<!DOCTYPE html>`, indiquant qu'il s'agit d'un document HTML5.

## Balise `<html>`
La balise `<html>` englobe tout le contenu de la page et spécifie la langue française avec l'attribut `lang="fr"`.

## Balise `<head>`
La balise `<head>` contient des informations sur la page, telles que le jeu de caractères, le titre de la page et des liens vers des feuilles de style et d'autres ressources.

- `<meta charset="UTF-8">` définit l'encodage des caractères à UTF-8.
- `<title>Site de Citations</title>` spécifie le titre de la page affiché dans l'onglet du navigateur.
- Les balises `<link>` incluent le fichier CSS local (`styles.css`) et le framework Bootstrap depuis une source externe.

## Balise `<body>`
La balise `<body>` contient le contenu principal de la page.

### Structure en Grille Bootstrap
- La page est divisée en deux colonnes (`col-12 col-md-2` et `col-12 col-md-10`) à l'aide de la grille Bootstrap.

### Barre de Navigation
- Une barre de navigation latérale est créée avec le bouton "Menu" qui déclenche une collapse (réduction) du contenu.
- Différentes sections de navigation sont incluses, chacune avec des sous-menus déroulants.

### Contenu Principal
- Des sections de contenu telles que "Bienvenue sur notre site de citations !" et "Nos meilleures citations" sont incluses.
- Une section de citations déroulantes est créée à l'aide de la classe `card-deck` de Bootstrap.

### Pied de Page
- Un pied de page est ajouté avec des informations sur le créateur du site et des liens vers les réseaux sociaux.

## Balises `<script>`
- Les balises `<script>` incluent les bibliothèques jQuery, Popper.js, et Bootstrap JS depuis des sources externes.

---

