
/* ======== Google Font & Global Styles ======== */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');

body {
    font-family: 'Inter', sans-serif;
    background: #1e1e2f;
    color: white;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* ======== Cool Animated Background ======== */
.background-animation {
    position: fixed;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
    animation: gradient 10s infinite alternate;
    z-index: -1;
}

@keyframes gradient {
    0% { background: radial-gradient(circle, #22c1c3, #fdbb2d); }
    100% { background: radial-gradient(circle, #fdbb2d, #22c1c3); }
}

/* ======== Navbar Styling ======== */
.navbar {
    background: rgba(30, 30, 50, 0.9);
    padding: 15px;
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
    transition: 0.3s ease-in-out;
}

.navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.3s ease;
}

.navbar a:hover {
    color: #fdbb2d;
}

/* ======== Hero Section with Cool Effects ======== */
.hero {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 20px;
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: bold;
    margin-bottom: 10px;
    animation: fadeIn 2s ease-in-out;
}

.hero-content p {
    font-size: 1.4rem;
    animation: fadeIn 3s ease-in-out;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background: #fdbb2d;
    color: black;
    font-size: 1rem;
    text-decoration: none;
    border-radius: 5px;
    transition: transform 0.3s ease, background 0.3s ease;
}

.btn:hover {
    background: #22c1c3;
    transform: scale(1.1);
}

/* ======== Features Section ======== */
.features {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 50px 20px;
    background: rgba(30, 30, 50, 0.9);
    text-align: center;
}

.feature-box {
    max-width: 280px;
    padding: 20px;
    background: #26263b;
    color: white;
    border-radius: 10px;
    margin: 20px;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

.feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
}

.feature-box img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

/* ======== Footer ======== */
.footer {
    background: #26263b;
    text-align: center;
    padding: 15px;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* ======== Scroll Animation ======== */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

.hidden {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.show {
    opacity: 1;
    transform: translateY(0);
}
