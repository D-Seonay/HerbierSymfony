// Exemple de données d'entrée
const data = [3, 3, 3, 9, 6, 6, 1, 9, 4];

const chartDiv = d3.select("#chart");

// Taille d'un carré
const squareSize = 50;
const squares = chartDiv.selectAll("div")
    .data(data)
    .enter()
    .append("div")
    .style("width", squareSize + "px")
    .style("height", squareSize + "px")
    .style("float", "left")
    .style("background-color", d => d >= 5 ? "green" : "white")
    .style("opacity", 0.7)
    .style("margin", "2px")
    .style("border", "1px solid black")
    .style("transform", () => `rotate(${Math.floor(Math.random() * 360)}deg)`);
