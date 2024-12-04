<section id="home-section">
    <!-- Imagen de fondo -->
    <img src="https://images.wallpaperscraft.com/image/single/guitarist_electric_guitar_guitar_208772_2560x1600.jpg" alt="Picture of guitar" class="home-img">

    <!-- Texto sobre la imagen -->
    <div class="home-img__text">
        <h3>Featured Models</h3>
        <p>The best performance for the best players</p>
        <a href="#guitars-section" class="guitars-section__a">View All</a>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Palanquin:wght@600&display=swap');

    #home-section {
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        width: 100%;
        height: 100vh;
        background-color: #fff;
        position: static;
        z-index: 8;
    }

    .home-img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
        filter: saturate(0);
    }

    .home-img__text {
        background-color: hsla(0, 0%, 12%, 0.9);
        position: absolute;
        bottom: 15px;
        right: 15px;
        width: 20em;
        height: 13em;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        z-index: 9;
        padding: .8em;
    }

    .home-img__text h3 {
        font-size: 2.7em;
        font-family: 'Oswald', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #fff;
        text-align: center;
        margin: 0;
    }

    .home-img__text p {
        font-size: 1.3em;
        color: #fff;
        font-family: 'Palanquin', sans-serif;
        margin: 0 .5em .5em .5em;
        text-align: center;
    }

    .guitars-section__a {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        background-color: transparent;
        border: 1px solid #fff;
        padding: .8em 0;
        font-size: 1.2em;
        text-transform: uppercase;
        transition: all 0.3s ease;
        text-align: center;
        width: 100%;
    }

    .guitars-section__a:hover {
        background-color: #fff;
        color: #121212;
    }
</style>