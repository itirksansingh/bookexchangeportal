<?php include 'navbar.php'; ?> <!-- Include Navigation Header -->

<div class="about-container">
    <h2>About Book Exchange</h2>
    <p>Book Exchange is a platform where book lovers can trade and share books with ease.</p>

    <div class="about-grid">
        <div class="about-section">
            <img src="assets/images/ourvision.png" alt="Books">
            <h3>Our Mission</h3>
            <p>To create a community-driven platform for book lovers to exchange books worldwide.</p>
        </div>

        <div class="about-section">
            <img src="assets/images/community.jpg" alt="Community">
            <h3>Our Vision</h3>
            <p>To make knowledge and literature accessible to everyone, anywhere.</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?> <!-- Include Footer -->

<style>
.about-container {
    width: 70%;
    margin: auto;
    text-align: center;
    padding: 20px;
}

.about-grid {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.about-section {
    width: 45%;
    padding: 15px;
    background: #2980B9;
    border-radius: 8px;
    text-align: center;
}

.about-section img {
    width: 100%;
    border-radius: 8px;
}

.about-section h3 {
    margin-top: 10px;
    color: #2c3e50;
}
</style>
