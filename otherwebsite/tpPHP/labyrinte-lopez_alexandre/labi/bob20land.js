var mc;
var gc;
const DIM_LAB = 16; /*PETIT EASTER EGG AVEC RP1, SI TU VA EN ARRIERE PUIS A DROITE DES LE DEBUT TU WIN C UN HIDDEN WIN*/
const TAB_LAB = [
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];
const TAB_LAB2 = [
	[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2],/* EASTE EGG EN 16, 0*/
	[1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1],
	[1, 1, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1],
	[1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1],
	[1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1],
	[1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1],
	[1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1],
	[1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1],
	[1, 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1],
	[1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1],
	[1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 1],
	[1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1],
	[1, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1],
	[1, 0, 0, 0, 1, 1, 0, 1, 1, 2, 0, 0, 1, 0, 1, 1],
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
	[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

function init() {
	mc = document.getElementById("cadre"); //déclaration du canvas, du labyrinthe, du joueur et des ennemis
	gc = mc.getContext("2d");
	nbmov = document.getElementById("mov");
	var land = new Labyrinthe(TAB_LAB2);
	var j1 = new Perso(6, 1);

	setInterval(afficherJeu, 1000 / 75, land, j1, );//refresh du jeu 75x par seconde
	document.addEventListener('keydown', j1.deplacer.bind(j1, TAB_LAB2), false); //déclenchement de la fonction déplacer sur l'appui d'une touche
	setInterval(deplacerEnnemis, 400, TAB_LAB2, e1, e2, e3);//déplacer les ennemis toutes les 0.5 sec
}

function afficherJeu(land, j1,) {
	nbmov.innerHTML = "Mouvements: " + j1.moves; //compteur de mouvements
	j1.afficherPerso(); //afficher les éléments à chaque appel de la fonction (refresh)

	land.afficherLabyrinthe(); //
}

function gagner() {
	document.write('<body>Bien joué tu as gagné! Mais as-tu trouvé l easter egg?</body>');
}

function perdu() {
	document.write('<body>Perdu.. refresh pour recommencer !</body>');
}
