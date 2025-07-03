<?php include 'navbar.php'; ?> <!-- Include Navigation Header -->

<div class="contact-container">
    <h2>Contact Us</h2>
    <p>Have questions? Feel free to reach out to us using the form below.</p>

    <form action="process_contact.php" method="POST">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>

<?php include 'footer.php'; ?> <!-- Include Footer -->

<style>
.contact-container {
    width: 50%;
    margin: auto;
    padding: 20px;
    text-align: center;
}

.contact-container h2 {
    color: #2c3e50;
}

form {
    background: #2980B9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    margin-top: 15px;
    background: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}

button:hover {
    background: #2980b9;
}
</style>
