import { getCenter } from './utils.js';

export class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    draw(ctx) {
        ctx.beginPath();
        ctx.arc(this.x, this.y, 10, 0, 2 * Math.PI);
        ctx.strokeStyle = "black";
        ctx.fillStyle = "white";
        ctx.stroke();
        ctx.fill();
    }

    drawPointLabel(ctx, label) {
        ctx.font = "14px Arial";
        ctx.fillStyle = "black";
        ctx.fillText(label, this.x, this.y);
    }
}

export class Points extends Array {
    constructor(maxPts) {
        super();
        this.maxPts = maxPts;
    }
}

export class Edge {
    constructor(pointA, pointB) {
        this.pointA = pointA;
        this.pointB = pointB;
    }

    drawEdge(ctx) {
        ctx.beginPath();
        ctx.moveTo(this.pointA.x, this.pointA.y);
        ctx.lineTo(this.pointB.x, this.pointB.y);
        ctx.strokeStyle = "black";
        ctx.lineWidth = 2;
        ctx.stroke();
    }

    labelEdge(ctx, label) {
        let [x, y] = getCenter(this.pointA, this.pointB);
        let text = `${label}`;

        ctx.font = "12px Arial"; // Font smaller than the nodes to differentiate
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";

        let rectWidth = 20;
        let rectHeight = 20;

        // Give the edge label a background
        ctx.fillStyle = "white";
        ctx.fillRect(x - rectWidth / 2, y - rectHeight / 2, rectWidth, rectHeight);

        // Fill label
        ctx.fillStyle = "black";
        ctx.fillText(text, x, y);
    }
}

export class Edges {
    constructor(edgeList = []) {
        this.list = edgeList;
    }
}
