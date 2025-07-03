<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h4>About Us</h4>
            <p>Book Exchange is a platform where book lovers can share, borrow, and trade books with ease.</p>
        </div>
        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="indexb.php">Home</a></li>
                <li><a href="browse.php">Browse Books</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h4>Follow Us</h4>
<div class="social-icons">
    <a href="https://facebook.com/YourPage" target="_blank">
        <img src="assets/icons/facebook-icon.png" alt="Facebook">
    </a>
    <a href="https://twitter.com/YourPage" target="_blank">
        <img src="assets/icons/twitter-icon.png" alt="Twitter">
    </a>
    <a href="https://instagram.com/YourPage" target="_blank">
        <img src="assets/icons/instagram-icon.png" alt="Instagram">
    </a>
</div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2025 Book Exchange | Designed with ❤️ by Us</p>
    </div>
</footer>

<style>
/* Footer Styling */
footer {
    background-color: #2c3e50;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding: 20px;
    flex-wrap: wrap;
}

.footer-section {
    width: 30%;
    min-width: 200px;
}

.footer-section h4 {
    font-size: 1.2em;
    margin-bottom: 10px;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin: 5px 0;
}

.footer-section ul li a {
    color: #bdc3c7;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.footer-section ul li a:hover {
    color: #ecf0f1;
}

/* Social Media Icons */
.social-icons {
    display: flex;
    justify-content: center;
    gap: 15px; /* Space between icons */
    margin-top: 10px;
}

.social-icons a {
    display: inline-block;
    transition: transform 0.3s ease-in-out;
}

.social-icons a:hover {
    transform: scale(1.2); /* Slight zoom effect on hover */
}

.social-icons a img {
    width: 36px; /* Increased icon size */
    height: 36px;
    transition: transform 0.3s ease-in-out;
}

/* Footer Bottom */
.footer-bottom {
    background-color: #1a252f;
    padding: 10px;
    font-size: 0.9em;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
    }

    .footer-section {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
}
</style>

