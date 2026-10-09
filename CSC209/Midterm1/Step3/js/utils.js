import { Point, Points, Edges, Edge } from './classes.js';
import { WIDTH, HEIGHT } from './constants.js';

export function getCenter(pt1, pt2) {
    let x = (pt1.x + pt2.x) / 2;
    let y = (pt1.y + pt2.y) / 2;
    return [x, y];
}

export function createPoints(numPoints) {
    let points = new Points(numPoints);
    for (let i = 0; i < numPoints; i++) {
        let x = Math.random() * (WIDTH - 40) + 20;
        let y = Math.random() * (HEIGHT - 40) + 20;
        points.push(new Point(x, y));
    }
    return points;
}

export function createEdges(numEdges, points) {
    let edgesList = [];
    let numPoints = points.length;

    // Make sure there are at least two points
    if (numPoints < 2) {
        return new Edges(edgesList);
    }

    // Keep track of pairs to ensure no duplicates
    let usedPairs = new Set();

    while (edgesList.length < numEdges) {
        let indexA = Math.floor(Math.random() * numPoints);
        let indexB = Math.floor(Math.random() * numPoints);

        // Cannot connect a point to itself
        if (indexA === indexB) continue;

        // All pairs will have the lower index first
        let minimum = Math.min(indexA, indexB);
        let maximum = Math.max(indexA, indexB);
        let pair = `${minimum}-${maximum}`;

        if (!usedPairs.has(pair)) {
            usedPairs.add(pair);
            edgesList.push(new Edge(points[indexA], points[indexB]));
        }
    }

    return new Edges(edgesList);
}

export function getCoords(points) {
    let final = "Coordinates of the points: \n"
    let counter = 0;
    for (let point of points) {
        final+= `Point ${counter}: ` + Math.trunc(point.x) + ", " + Math.trunc(point.y) + "\n";
        counter ++;
        }
    return final;
}