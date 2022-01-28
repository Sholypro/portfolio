function castParallax() {

	var opThresh = 350;
	var opFactor = 750;
    var speed= 30;
	window.addEventListener("scroll", function(event){

		var top = this.pageYOffset;
        var bg = document.getElementById("bg")
        var logo = document.getElementById("paralax")
        var yPosbg = -(top * speed / 100);
        var yPoslogo = -(top * (speed) / 100);
        bg.setAttribute('style', 'transform: translate3d(0px, ' + yPosbg + 'px, 0px)');
        logo.setAttribute('style', 'transform: translate3d(0px, ' + yPoslogo + 'px, 0px)');



		
        
		
	});
}

document.body.onload = castParallax();