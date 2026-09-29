const ROWS = 3;

// show the about me text
function ShowText() {
    let textTarget = document.getElementById("about-target");
    let button = document.getElementById("about");

    if (textTarget.textContent === "") {
        textTarget.textContent = "I'm a Computer Science major who is interested in French Literature and World History! I like reading novels in English and French.";
        button.textContent = "Hide";
    } 

    else {
        textTarget.textContent = "";
        button.textContent = "Read Me";
    }
}

// toggle the list of credits
function toggleList() {
    const list = document.getElementById("list");

    if (list.style.display === "none") {
        list.style.display = "block";
    } else {
        list.style.display = "none";
    }
}

// dark mode/light mode
function toggleTheme() {
    let theme = document.getElementById("theme-style");
    let button = document.getElementById("dark-mode");

    // Check if current style path is light.css, if so, puts site into dark mode
    if (theme.getAttribute("href").includes("light.css")) {
        theme.setAttribute("href", "./Technical/css/dark.css");
        button.textContent = "Toggle Light Mode";
    // Otherwise puts sight into light mode and changes button text accordingly
    } else {
        theme.setAttribute("href", "./Technical/css/light.css");
        button.textContent = "Toggle Dark Mode";
    }
}

// add today's date to the page
function getDate() {
    const today = new Date();

    const day = today.getDate().toString();
    let month = today.getMonth() + 1;
    month = month.toString();
    const year = today.getFullYear().toString();
    
    const todaysDate= day + "/" + month + "/" + year;

    document.getElementById("today-date").textContent = todaysDate;
}


// hide the table
function hideTable() {
    const table = document.getElementById("table");
    const button = document.getElementById("hide-table");

    if (table.style.display === "none") {
        table.style.display = "block";
        button.textContent = "Hide Table";
    } else {
        table.style.display = "none";
        button.textContent = "Show Table";
    }
}

// hide row of table
function hideRow(rownum) {
    const row = document.getElementById("row"+rownum);

    if (row.style.display === "none") {
        row.style.display = "block";
    } else {
        row.style.display = "none";
    }
}

// Show the hidden rows 
function showHidden() {
    for (let i = 1; i<= ROWS; i++) {

        let thisRow = document.getElementById("row"+i);

        if (thisRow.style.display === "none") {
            thisRow.style.display = "table-row";
        }
    };
    
}

// switch nav direction
function toggleNav() {
    const container = document.getElementById("main-container");
    const button = document.getElementById("nav-position");

    // change flex direction to row-reverse to reverse order of divs
    if (container.style.flexDirection === "row-reverse") {
        container.style.flexDirection = "row";
        button.textContent = "Move Navigation Right";
    } else {
        container.style.flexDirection = "row-reverse";
        button.textContent = "Move Navigation Left";
    }
}