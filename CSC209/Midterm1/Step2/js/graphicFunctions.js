import { WIDTH, HEIGHT, CTX } from './constants.js'
import { createPoints, createEdges } from './utils.js';

// Draw points
export function addPointsCTX(points, ctx) {
    points.forEach((point, index) => {
        point.draw(ctx);
        point.drawPointLabel(ctx, index);
    });
}

// Draw edges
export function addEdgesCTX(edges, ctx) {
    edges.list.forEach((edge, index) => {
        edge.drawEdge(ctx);
        edge.labelEdge(ctx, index);
    });
}

// Clear the canvas
export function clearCanvas(ctx) {
    ctx.clearRect(0,0, WIDTH, HEIGHT);
}

// Draw everything in one call
export function drawAll(numPoints, numEdges, ctx = CTX) {

    let points = createPoints(numPoints);
    let edges = createEdges(numEdges, points);

    clearCanvas(ctx);
    addEdgesCTX(edges, ctx);
    addPointsCTX(points, ctx);

    return points;
}