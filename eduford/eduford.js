var navLinks = document.getElementById('navLinks');

function hideMenu() {
    console.log("hide me");
    
    navLinks.style.right = '-200px';
}

function showMenu() {
    console.log("show me");
    
    navLinks.style.right = '0';
}