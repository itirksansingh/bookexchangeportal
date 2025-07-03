document.addEventListener("DOMContentLoaded", function () {
    // Smooth scrolling effect
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth"
            });
        });
    });

    // Hover effects for feature boxes
    let features = document.querySelectorAll(".feature-box");
    features.forEach(box => {
        box.addEventListener("mouseenter", function () {
            this.style.boxShadow = "0px 0px 20px rgba(255, 255, 255, 0.3)";
        });
        box.addEventListener("mouseleave", function () {
            this.style.boxShadow = "none";
        });
    });

    // Navbar color change on scroll
    let navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.style.background = "#1c2541";
        } else {
            navbar.style.background = "#222";
        }
    });
}); 
function searchBooks() {
    let input = document.getElementById("searchBar").value.toLowerCase();
    let books = document.getElementsByClassName("book-card");

    for (let i = 0; i < books.length; i++) {
        let title = books[i].getElementsByTagName("h2")[0].innerText.toLowerCase();
        let author = books[i].getElementsByTagName("p")[0].innerText.toLowerCase();

        if (title.includes(input) || author.includes(input)) {
            books[i].style.display = "block";
        } else {
            books[i].style.display = "none";
        }
    }
}