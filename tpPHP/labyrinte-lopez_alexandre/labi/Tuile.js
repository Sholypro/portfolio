class Tuile {
	constructor(t, x, y) {
		this.type = t;
		this.posX = x;
		this.posY = y;
		this.tuileX = 30;
		this.tuileY = 30;
	}

	afficherTuile() {
		if (this.type == 1) {
			gc.fillStyle = "#262626";
			gc.fillRect(this.posX * this.tuileX, this.posY * this.tuileY, this.tuileX, this.tuileY);
		} else if (this.type == 2) {
			gc.fillStyle = "#09bc8a";
			gc.fillRect(this.posX * this.tuileX, this.posY * this.tuileY, this.tuileX, this.tuileY);
		}
	}
}
