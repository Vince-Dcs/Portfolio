# oAgency

## Intégration

* Webpack
* Sass
* Browser-sync
* font-awesome
* jQuery
* jarallax
* Bootstrap

> La présentation des articles de la homepage peut être réalisée sans Bootstrap, allez voir du côté de `column-count` et `column-gap` ou bien une petite recherche autour de 'Masonry'

## WordPress

- (Facultatif) Nouvelle install custom + Configuration
- Conception du thème de base
- Setup de theme
- Le site doit possèder 2 navigations indépendantes
- Le footer de toutes les pages doit contenir 4 espaces de widgets
- Template custom front-page
- Template de categorie blog
- Template de categorie projet
- Template d'article
- Template de projet
	- doit afficher le contenu du post, son titre et l'image à la une
	- doit avoir en fond d'écran la reprise de l'image à la Une en parallax (plugin jquery jarallax)
- Le customizer doit gérer les différentes zones (section) de la homepage et les rendre facultatives (possibilité d'activer/désctiver la section)
	- La section `carousel` doit proposer 3 sélecteur de page pour alimenter le carousel Boostrap
	- (Facultatif) La section `carousel` doit proposer un champ pour définir l'interval de temps entre 2 slides
	- La section `posts` doit avoir un titre et un sous-titre
	- La section `posts` doit avoir un champ précisant le nombre de posts à afficher
	- (Facultatif) La section `posts` doit avoir un sélecteur permettant de choisir la catégorie des posts à afficher
	- La section `call to action` doit avoir un titre et un sous titre
	- La section `call to action` doit avoir 2 boutons configurable (texte + lien)
	- La section `call to action` doit avoir un background avec un effet de parallax (plugin jquery jarallax)
	- (Facultatif) La section `call to action` un sélecteur d'image pour le background de la section
- (Facultatif) Concevoir un plugin sauvegardant le nombre de fois qu'un article a été visité dans un CF `counter` puis afficher ce compteur dans le template de l'article
