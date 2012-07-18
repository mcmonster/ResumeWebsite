function draw() {
	drawAnchor();
	drawAnchorLines();

	// Grow the selected menu item
	var controller = window.location.pathname.split("/");
	if (controller[1] == "") { // Home page is selected
		growMenuItem('home');
	} else if (controller[1] == "educations") {
		growMenuItem('educations');
	} else if (controller[1] == "jobs") {
		growMenuItem('jobs');
	} else if (controller[1] == "projects") {
		growMenuItem('projects');
	} else if (controller[1] == "skills") {
		growMenuItem('skills');
	} else if (controller[1] == "recommendations") {
		growMenuItem('recommendations');
	} else if (controller[1] == "pages") { // Contact page is selected
		growMenuItem('contact');
	}
}

function drawAnchor() {
	var canvas       		  = document.getElementById("anchor_canvas");
	var ctx        		  = canvas.getContext("2d");
	var endAngle   		  = Math.PI*2;
	var isCounterClockwise = false;
	var radius     		  = canvas.width/2-1;
	var startAngle 		  = 0;
	var xPos       		  = canvas.width/2;
	var yPos       		  = canvas.height/2;

	// Draw a circle
	ctx.beginPath();
	ctx.arc(xPos, yPos, radius, startAngle, 
			  endAngle, isCounterClockwise);
	ctx.lineWidth   = 1;
	ctx.fillStyle   = "red";
	ctx.strokeStyle = "black";
	ctx.fill();
	ctx.stroke();

	// Draw the R
	ctx.font = "bold 50pt Arial";
	ctx.fillStyle = "black";
	ctx.fillText("R", 28, 70);
}

function drawAnchorLines() {
	var anchor 		 = document.getElementById("anchor");
	var topLeft 	 = document.getElementById("anchor_line_top_left");
	var bottomRight = document.getElementById("anchor_line_bottom_right");
	var container   = document.getElementById("container");
	var footer      = document.getElementById("footer");
	var menu			 = document.getElementById("menu");

	topLeft.style.width          = (container.offsetLeft + menu.offsetWidth)+"px";
	topLeft.style.height         = (anchor.offsetHeight/2 + anchor.offsetTop)+"px";
	bottomRight.style.marginTop  = (topLeft.offsetHeight-1)+"px";
	bottomRight.style.marginLeft = (topLeft.offsetWidth-1)+"px";
	bottomRight.style.height	  = (document.body.offsetHeight-topLeft.offsetHeight-
											  footer.offsetHeight)+"px";
	bottomRight.style.width		  = (document.body.offsetWidth-topLeft.offsetWidth)+"px";
}

function growMenuItem(target) {
	var menuItem	  = document.getElementById(target);
	var menuItemLink = document.getElementById(target+"_link");

	menuItem.style.width        = "130px";
	menuItemLink.style.fontSize = "20px";
	menuItemLink.style.color    = "red";
}

function shrinkMenuItem(target) {
	var menuItem     = document.getElementById(target);
	var menuItemLink = document.getElementById(target+"_link");
	var controller   = window.location.pathname.split("/");

	// If the current link has been selected for viewing
	// do not shrink the menu item
	var controller = window.location.pathname.split("/");
	if ((controller[1] == "") && (target == "home")) return;
	if ((controller[1] == "pages") && (target == "contact")) return;
	if (controller[1] == target) return;
	
	// Shrink the menu item
	menuItem.style.width        = "100px";
	menuItemLink.style.fontSize = "14px";
	menuItemLink.style.color    = "black";
}
