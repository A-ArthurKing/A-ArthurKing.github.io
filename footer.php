<footer>
        <div class="sections-footer">
            <div class="footpart1">
                <div class="page-section">
                    <h1>Nos pages</h1>
                    <div class="linkpage">
                        <a href="./index.html">Acceuil</a>
                        <a href="#Nos tarifs">Services</a>
                        <a href="#galérie">Galérie</a>
                        <a href="#Promotions">Promotions</a>
                        <a href="./blog.html">Blog</a>
                    </div>
                </div>
                <div class="Apropos-section">
                    <h1>Léhahiah Angle's</h1>
                    <p>Notre équipe propose des prestations spécialisées et des soins adaptés, dans un institut toujours à la pointe des nouveautés.</p>
                    <div class="social-icones">
                        <a href="https://www.instagram.com/leha.hiah/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/lehahiah.lehahiah.7/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/Lehahiahangels"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.tiktok.com/@lehahiahangels?lang=fr"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="Horraire-section">
                    <h1>Nos horaires</h1>
                    <p>Lundi au Samedi 8h00 - 18h30</p>
                    <p>Dimanche 13h30 - 18h30</p>
                    <p>Fermer le mercredi</p>
                </div>
                <div class="Contact-section">
                    <h1>Nous contacter</h1>
                    <a href=""><i class=" fac fa-solid fa-location-dot"></i>Charbonnages Gabon</a><br>
                    <a href=""><i class=" fac fa-solid fa-phone"></i>+241 066 68 58 85</a><br>
                    <a href=""><i class=" fac fa-brands fa-whatsapp"></i>+241 066 68 58 85</a>
                </div>
                <div class="Legal-section">
                    <h3>© 2024 Léhahiah Angel s, Tous droits réservés Développer par @willix digital</h3>
                </div>
                <div class="map-section">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27643645.45381059!2d-26.28331646686698!3d32.24547633342523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f2597e0926195%3A0xae58e3dd97126d4d!2sL%C3%A9hahiah%20Angel&#39;s!5e0!3m2!1sfr!2sma!4v1717512303554!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
</footer>

<style>
    *{
        font-family: "Open Sans", sans-serif;
    }
    footer{
        background-color: #c38154;
        min-height: 600px;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        bottom:0;
    }
    footer h1 {
        font-size: 25px;
    }
    a{
    color: white;
        text-decoration: none;
    }
    .sections-footer{
        max-width: 1700px;
    }
    .footpart1{
        display: grid;
        width: 95vw;
        max-width: 1700px;
        height: 500px;
        grid-template-columns: repeat(5 ,1fr);
        grid-template-rows: 1fr 3fr 1fr;
        grid-row-gap: 10px;
        grid-column-gap: 30px;
    }
    .page-section{
        text-align: center;
        grid-area: 1/1/1/4;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        color: white;
        border-bottom: 1px solid white;
    }
    .page-section h1{
        width: 100%;
        text-align: left;
        font-size: 25px;
    }
    .linkpage{
        width: 100%;
        text-align: left;
        padding-bottom: 20px;
    }
    .linkpage a{
        color: white;
        margin-right: 20px;
        font-weight:bold;
        border-bottom:1px solid transparent;
        padding-bottom:5px;
        transition: 0.1s ease;
    }
    .linkpage a:hover{
        border-bottom:1px solid white;
    }
    .Apropos-section{
        text-align: center;
        grid-area: 3/1/2/2;
        text-align: left;
        color: white;
    }
    .Apropos-section h1{
        font-family: "Catalish Huntera";
    }
    .Apropos-section a {
        padding: 20px 25px 20px 0;
        transition: 0.1s ease;
    }
    .Apropos-section i:hover {
        color:wheat;
    }
    .Horraire-section{
        text-align: left;
        color: white;
        grid-area: 3/2/2/2;
    }
    .Contact-section{
        grid-area: 3/3/2/4;
        text-align: center;
        color: white;
        text-align: left;
    }
    .Contact-section i{
        padding-right: 20px;
        margin-bottom: 20px;
    }
    .Contact-section a{
        width: 100%;
    }
    .Legal-section{
        text-align: center;
        grid-area: 3/1/4/6;
        color: white;
        border-bottom: 1px solid white;
        border-top: 1px solid white;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .map-section{
        background-color:gray;
        text-align: center;
        grid-area: 1/4/3/6;
    }
    .map-section iframe{
        height: 100%;
        width: 100%;
    }
    .social-icones{
        width: 40%;
        display: flex;
        justify-content: space-between;
        color: white;
    }
    .social-icones i{
        color: white;
        font-size: 20px;
    }


    @media only screen and (max-width: 1360px) {
    .footpart1{
        grid-template-columns: repeat(4 ,1fr);
        grid-template-rows: 3fr 3fr 1fr;
    }
    .page-section{
        grid-area: 1/2/2/2;
        border: none;
    }
    .linkpage{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }
    .linkpage a{
        color: white;
        width: 100%;
    }
    .Apropos-section{
        grid-area: 1/1/2/2;
    }
    .Apropos-section a{
        padding-top: 10px;
    }
    .Horraire-section{
        grid-area: 1/3/2/4;
    }
    .Contact-section{
        grid-area: 1/4/2/4;
    }
    .Legal-section{
        grid-area: 3/1/4/6;
    }
    .map-section{
        grid-area: 2/1/3/6;
    }
    }


    @media only screen and (max-width: 1120px) {
    .footpart1{
        grid-template-columns: repeat(4 ,1fr);
        grid-template-rows: repeat(4 ,1fr);
    }
    .page-section{
        grid-area: 2/2/4/2;
    }
    .linkpage{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }
    .linkpage a{
        color: white;
        width: 100%;
    }
    .Apropos-section{
        grid-area: 1/1/2/3;
    }
    .Horraire-section{
        grid-area: 1/3/2/6;
    }
    .Contact-section{
        grid-area: 2/1/4/2;
    }
    .Legal-section{
        grid-area: 4/1/4/6;
    }
    .map-section{
        grid-area: 2/3/4/6;
    }
    }

    @media only screen and (max-width: 999px) {
    .footpart1{
        grid-template-columns: repeat(2 ,1fr);
        grid-template-rows: repeat(6 ,1fr);
        height: auto;
        max-width: 90vw;
        max-height: 93vh;
    }
    .Apropos-section{
        grid-area: 1/1/1/3;
    }
    .page-section{
        grid-area: 2/1/2/3;
    }
    .linkpage{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
    }
    .linkpage a{
        color: white;
        width: 100%;
    }
    .Horraire-section{
        grid-area: 3/1/3/3;

    }
    .Contact-section{
        grid-area: 4/1/4/3;

    }
    .Legal-section{
        grid-area: 6/1/6/3;

    }
    .map-section{
        grid-area: 5/1/5/3;

    }
    }
    </style>