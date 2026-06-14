function toggleDarkMode() {
    const isDark = document.body.classList.toggle('dark-mode');

    // Save to localStorage
    localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
}

// Load saved theme on page load
window.onload = function () {
    const darkMode = localStorage.getItem('darkMode');

    if (darkMode === 'enabled') {
        document.body.classList.add('dark-mode');
        document.getElementById('darkModeToggle').checked = true;
    }
};




// Load saved theme on page load (runs on ALL pages)
document.addEventListener("DOMContentLoaded", function () {
    const darkMode = localStorage.getItem('darkMode');

    if (darkMode === 'enabled') {
        document.body.classList.add('dark-mode');

        const toggle = document.getElementById('darkModeToggle');
        if (toggle) {
            toggle.checked = true;
        }
    }
});

// Toggle function (used by ALL pages)
function toggleDarkMode() {
    const isDark = document.body.classList.toggle('dark-mode');

    localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
}


function handleSearch(event) {
    event.preventDefault();

    let query = document.getElementById("searchInput").value.toLowerCase();

    // SEARCH LOGIC (KEYWORDS → PAGE)
    if (query.includes("glueless")) {
        window.location.href = "glueless-wigs.html";
    } 
    else if (query.includes("bob")) {
        window.location.href = "bob-wigs.html";
    } 
    else if (query.includes("bone straight")) {
        window.location.href = "bone-straight-wigs.html";
    } 
    else if (query.includes("curly")) {
        window.location.href = "curly-wigs.html";
    } 
    else if (query.includes("short")) {
        window.location.href = "short-cut-wigs.html";
    } 
    else if (query.includes("tools") || query.includes("hair tools")) {
        window.location.href = "hair-tools.html";
    } 
    else {
        alert("Product not found!");
    }

    
}