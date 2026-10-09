import { getCoords } from './utils.js';


// Get number of points and edges to display on the top of the page
export function getPoints(nrpts) {
    document.getElementById("nrpts").innerText += " " + nrpts;
}

export function getEdges(nredges) {
    document.getElementById("nredges").innerText += " " + nredges;
}

export function displayCoords(points) {
    document.getElementById("display-coords").innerText = getCoords(points);
}