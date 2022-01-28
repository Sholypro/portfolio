class Labyrinthe {
	constructor(tab) {
		this.tabTuiles = new Array(tab.length);
		for (var i = 0; i < this.tabTuiles.length; i++) {
			this.tabTuiles[i] = new Array(tab[i].length);
			for (var j = 0; j < this.tabTuiles[i].length; j++) {
				this.tabTuiles[i][j] = new Tuile(tab[i][j], j, i);
			}

		}
	}
	afficherLabyrinthe() {
		for (var i = 0; i < this.tabTuiles.length; i++) {
			for (var j = 0; j < this.tabTuiles[i].length; j++) {
				this.tabTuiles[i][j].afficherTuile();
			}
		}
	}
}