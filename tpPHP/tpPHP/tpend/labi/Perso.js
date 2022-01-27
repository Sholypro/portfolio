class Perso{
	constructor(x, y){
		this.posX = x;
		this.posY = y;
		this.persoX = 30;
		this.persoY = 30;
		this.moves = 0;
	}
	
	afficherPerso(){ //afficher un carré rouge à l'emplacement du perso
		gc.fillStyle = "red"; 
		gc.fillRect(this.posX*this.persoX, this.posY*this.persoY, this.persoX, this.persoY);
	}
	
	deplacer(tab){
		this.moves++; //on incrémente le compteur de mouvements
		gc.fillStyle = "white";
		gc.fillRect(this.posX*this.persoX, this.posY*this.persoY, this.persoX, this.persoY); //afficher un carré blanc à l'emplacement du perso (pour effacer son ancienne position)
		switch (event.keyCode) { //selon la touche appuyée
			case 38: //flèche haut
			var y = this.posY-1; //on change la future position
			var x = this.posX;
			if(tab[y][x] != 1) { //si la future case n'est pas un mur (mur = 1)
				this.posY = y; //on applique la future position au perso
				
			} else {}
			break;
			case 40: //flèche bas
			var y = this.posY+1; 
			var x = this.posX;
			if(tab[y][x] != 1) {
				this.posY = y;
			} else {}
			break;
			case 39: //flèche droite
			var y = this.posY;
			var x = this.posX+1;
			if(tab[y][x] != 1) {
				this.posX = x;
			} else {}
			break;
			case 37: //flèche gauche
			var y = this.posY;
			var x = this.posX-1;
			if(tab[y][x] != 1) {
				this.posX = x;
			} else {}
			break;
		}
		if(tab[y][x] == 3) { //si la future case est un ennemi (ennemi = 3)
			perdu(); // on appelle la fonction perdu
		} else if (tab[y][x] == 2) { //si la future case est l'arrivée (arrivée = 2)
			gagner(); // on appelle la fonction gagner
		}
	}
}