var mc;
var gc;
const DIM_LAB = 15;
const TAB_LAB = [
[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];
const TAB_LAB2 = [
[1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
[1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 1],
[1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 1],
[1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1],
[1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1],
[1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1],
[1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1],
[1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1],
[1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1],
[1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1],
[1, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1],
[1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1],
[1, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 1],
[1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1],
[1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1]
];

function init(){
	mc = document.getElementById("cadre"); //déclaration du canvas, du labyrinthe, du joueur et des ennemis
	gc = mc.getContext("2d");
	nbmov = document.getElementById("mov");
	var land = new Labyrinthe(TAB_LAB2);
	var j1 = new Perso(6, 0);
	var e1 = new Evilperso(6, 7);
	var e2 = new Evilperso(13, 8);
	var e3 = new Evilperso(2, 12); //
	setInterval(afficherJeu, 1000/75, land, j1, e1, e2, e3);//refresh du jeu 75x par seconde
	document.addEventListener('keydown', j1.deplacer.bind(j1, TAB_LAB2), false); //déclenchement de la fonction déplacer sur l'appui d'une touche
	setInterval(deplacerEnnemis, 500, TAB_LAB2, e1, e2, e3);//déplacer les ennemis toutes les 0.5 sec
}

function afficherJeu(land, j1, e1, e2, e3){ 
	nbmov.innerHTML = "Mouvements: "+j1.moves; //compteur de mouvements
	j1.afficherPerso(); //afficher les éléments à chaque appel de la fonction (refresh)
	e1.afficherPerso();
	e2.afficherPerso();
	e3.afficherPerso();
	land.afficherLabyrinthe(); //
}
function deplacerEnnemis(TAB_LAB2, e1, e2, e3){ //appeler les déplacements d'ennemis
	e1.deplacer(TAB_LAB2); 
	e2.deplacer(TAB_LAB2); 
	e3.deplacer(TAB_LAB2);
}

function gagner(){
	document.write("gagné !");
}

function perdu(){
	document.write("Perdu");
}
