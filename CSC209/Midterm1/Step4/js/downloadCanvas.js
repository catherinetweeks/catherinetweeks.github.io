export function downloadCanvas() {
    const canvas = document.getElementById("pointsCanvas");
    const dataURL = canvas.toDataURL("image/png");

    const link = document.createElement("a");
    link.href = dataURL;
    link.download = "canvas-export.png";
    link.click();
}