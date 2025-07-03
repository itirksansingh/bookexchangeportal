
<nav class="navbar">
    <div class="nav-left">
        <a href="indexb.php">📚 Book Exchange</a>
<script src="scriptbook.js" defer></script>
<link rel="stylesheet" href="stylesbook.css">
<link rel="stylesheet" href="styleb.css">

    </div>
    <div class="nav-right">
        <a href="browse.php">Browse Books</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="user_dashboard.php">My Books</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
<a href="user_dashboard.php">👤 My Profile</a> <!-- Profile Link -->
        <?php endif; ?>
    </div>
</nav>

<style>
.navbar {
    display: flex;
    justify-content: space-between;
    background: #222;
    padding: 15px;
}

.navbar a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
}

.navbar a:hover {
    text-decoration: underline;
}
</style>
