class Evilperso{
	constructor(x, y){
		this.posX = x;
		this.posY = y;
		this.persoX = 30;
		this.persoY = 30;
		this.moves = 0;
	}
	
	afficherPerso(){
		gc.fillStyle = "purple";
		gc.fillRect(this.posX*this.persoX, this.posY*this.persoY, this.persoX, this.persoY);
	}
	
	deplacer(tab){ // même fonctionnement que le perso
		gc.fillStyle = "white";
		gc.fillRect(this.posX*this.persoX, this.posY*this.persoY, this.persoX, this.persoY);
		tab[this.posY][this.posX] = 3;
		var r = Math.floor(Math.random()*4)+1; // on utilise un aléatoire entre 1 et 4 à la place de l'input clavier
		switch (r) {
			case 1:
			var y = this.posY-1;
			var x = this.posX;
			if(tab[y][x] != 1) {
				tab[this.posY][this.posX] = 0; // on change la valeur de l'ancienne case à 0
				this.posY = y;
				tab[y][x] = 3; // on change à chaque fois la valeur de la case pour pouvoir identifier l'ennemi
			} else {}
			break;
			case 2:
			var y = this.posY+1;
			var x = this.posX;
			if(tab[y][x] != 1) {
				tab[this.posY][this.posX] = 0;
				this.posY = y;
				tab[y][x] = 3;
			} else {}
			break;
			case 3:
			var y = this.posY;
			var x = this.posX+1;
			if(tab[y][x] != 1) {
				tab[this.posY][this.posX] = 0;
				this.posX = x;
				tab[y][x] = 3;
			} else {}
			break;
			case 4:
			var y = this.posY;
			var x = this.posX-1;
			if(tab[y][x] != 1) {
				tab[this.posY][this.posX] = 0;
				this.posX = x;
				tab[y][x] = 3;
			} else {}
			break;
		}
	}
}