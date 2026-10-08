const SHAPES = ["circle", "square", "rectangle"]
const COLORS = ["red", "orange", "yellow", "green", "blue", "purple", "pink"]


function addShape() {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const MAXW = canvas.width;
    const MAXH = canvas.height;

    // Get a random shape and color
    const shape = SHAPES[Math.floor(Math.random() * SHAPES.length)];
    const color = COLORS[Math.floor(Math.random() * COLORS.length)];

    // Pick a random position
    const x = Math.random() * MAXW;
    const y = Math.random() * MAXH;

    ctx.fillStyle = color;

    if (shape === "square") {
        ctx.fillRect(x, y, 50, 50);
    } else if (shape === "rectangle") {
        ctx.fillRect(x, y, 40, 60);
    } else {
        ctx.beginPath();
        ctx.arc(x, y, 30, 0, 2 * Math.PI);
        ctx.fill();
    }
}

// SAVE SNAPSHOT/SCREENSHOT/IMAGE OF CANVAS
function downloadCanvas() {
    const canvas = document.getElementById("canvas");
    const dataURL = canvas.toDataURL("image/png");

    const link = document.createElement("a");
    link.href = dataURL;
    link.download = "canvas-export.png";
    link.click();
}


// Accordion code
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}