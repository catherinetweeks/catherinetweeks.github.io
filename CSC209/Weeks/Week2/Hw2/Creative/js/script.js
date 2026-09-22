function ShowText() {
    let textTarget = document.getElementById("about-target");
    let button = document.getElementById("about");

    if (textTarget.textContent === "") {
        textTarget.textContent = "Catherine is a Computer Science Major at Smith College originally from Exeter, New Hampshire.";
        button.textContent = "Hide";
    } 

    else {
        textTarget.textContent = "";
        button.textContent = "Read Me";
    }
}

function toggleTheme() {
    let theme = document.getElementById("theme-style");
    let button = document.getElementById("dark-mode");

    if (theme.getAttribute("href").endsWith("dark.css")) {
        theme.setAttribute("href", "./style/light.css");
        button.textContent = "Toggle Dark Mode";
    } else {
        theme.setAttribute("href", "./style/dark.css");
        button.textContent = "Toggle Light Mode";
    }
}