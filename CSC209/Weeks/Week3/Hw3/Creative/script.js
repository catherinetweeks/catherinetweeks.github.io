SHAPES = ["circle", "square", "rectangle"]

COLORS = ["red", "orange", "yellow", "green", "blue", "purple", "pink"]

MAXH = 500

MAXW = 800


function addShape() {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");

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