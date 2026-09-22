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

function toggleTheme() {
    let theme = document.getElementById("theme-style");
    let button = document.getElementById("dark-mode");

    // Check if current style path is light.css, if so, puts site into dark mode
    if (theme.getAttribute("href").includes("light.css")) {
        theme.setAttribute("href", "./Style/dark.css");
        button.textContent = "Toggle Light Mode";
    // Otherwise puts sight into light mode and changes button text accordingly
    } else {
        theme.setAttribute("href", "./Style/light.css");
        button.textContent = "Toggle Dark Mode";
    }
}