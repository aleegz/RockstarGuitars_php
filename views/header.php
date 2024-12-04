<header id="header">
    <!-- Barra de navegación principal -->
    <nav id="nav-bar">
        <div class="logo-container">
            <img src="https://flaticons.net/icon.php?slug_category=miscellaneous&slug_icon=electric-guitar-01" alt="Rockstar Guitars logo" id="header-img">
            <label class="logo">Rockstar Guitars</label>
        </div>

        <ul class="menu-nav">
            <li><a href="#home-section">Home<i class='bx bx-home'></i></a></li>
            <li><a href="#about-section">About<i class='bx bx-help-circle'></i></a></li>
            <li><a href="#guitars-section">Guitars<i class='bx bx-cart-add'></i></a></li>
            <!-- <li><a href="#custom-guitars-section">Custom Guitars<i class='bx bx-customize'></i></a></li> -->
            <li><a href="#contact-section">Contact<i class='bx bx-envelope'></i></a></li>
            <li><a href="login.php">Login<i class='bx bx-user'></i></a></li>
        </ul>
    </nav>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@500&display=swap');

    #header {
        background-color: #121212;
        color: #fff;
        padding: 1rem 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #nav-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 95vw;
    }

    #header-img {
        width: 50px;
        height: auto;
        margin-right: .5em;
    }

    .logo-container {
        display: flex;
        align-items: center;
        margin: 0 0 0 .5em;
    }

    .logo {
        font-family: 'Gemunu Libre', sans-serif;
        font-size: 3rem;
        font-weight: bold;
    }

    .menu-nav {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin: 0;
        padding: 0;
    }

    .menu-nav li {
        font-size: 1.1em;
    }

    .menu-nav a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #fff;
        transition: color 0.3s ease;
        padding: .3em;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .menu-nav a:hover {
        background: #ccc;
        color: #000;
    }

    .menu-nav i {
        margin-left: .3em;
    }

    .headResponsive .menu {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }

    .headResponsive .menu li a {
        text-decoration: none;
        color: #fff;
        font-size: 1.2rem;
    }
</style>