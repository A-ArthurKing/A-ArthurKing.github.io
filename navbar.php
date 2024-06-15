<nav class="navbar" id="navbar" >
            <div id="logo"><a href="./index.php">Léhahiah <span>Angel's</span></a></div>        
            <span class="hamburger-btn material-symbols-rounded">menu</span>

            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li class="link-item"><a href="#propos">A propos</a></li>
                <li class="link-item"><a href="#nosprestations">Nos prestations</a></li>
                <li class="link-item"><a href="./tarifs.php">Tarifs</a></li>
                <li class="link-item"><a href="./galerie.php">Galéries</a></li>
                <li class="link-item"><a href="./blog.php">Blog</a></li>
            </ul>
            <button class="login-btn">Réserver</button>
</nav>


<style>
    /*
    =================================================================================================================================
        *NAV
    =================================================================================================================================
    */
    .navbar {
        display: flex;
        padding: 15px 0;
        align-items: center;
        justify-content: space-around;
        max-width: 100vw;
        width: 100%;
        height: 50px;
        background-color: inherit;
        color: none;
        position: fixed;
        left: 0;
        right: 0;
        z-index: 9999999;
        margin-bottom: 20px;
        margin: auto;
    }


    nav{
        background-color: inherit;
    }
    .navbar .hamburger-btn {
        display: none;
        color: #a16840;  
        cursor: pointer;
        font-size: 1.3rem;
    }

    #logo a {
        font-size: 1.3rem;
        font-family: "Catalish Huntera";
        font-weight: lighter;
        color: white ;
        cursor: pointer;
    }

    #logo span {
        font-family: "Catalish Huntera";
        color: #C38154; 
    }

    .navbar .links {
        display: flex;
        gap: 35px;
        list-style: none;
        align-items: center;
    }

    .navbar .close-btn {
        position: absolute;
        left: 20px;
        top: 10px;
        display: none;
        color: #000;
        cursor: pointer;
    }

    .navbar .links a {
        color: white ;
        font-size: 1.1rem;
        font-weight: bold;
        text-decoration: none;
        transition: 0.1s ease;
    }

    .navbar .links a:hover {
        color: #C38154;  
    }

    .navbar .login-btn {
        color:white; 
        background: transparent;
        font-weight: bold;
        padding: 2px 20px;
        font-size: 1.3rem;
        transition: all 0.2s ease-in-out;
        border: 2px solid white; 
        border-radius: 5px;
    }

    .navbar .login-btn:hover {
        box-shadow: 0 0 10px 5px #C38154; 
        border: 2px solid transparent;
    }

    .navbar.scrolled {
        background-color: #f9f1e8;
    }
    .login-btn.scrolled {
        color: #C38154; 
        border: 2px solid #C38154; 
    }
    .links a.scrolled,#logo a.scrolled {
        color:#C38154; 
    }

    .navbar :is(.hamburger-btn, .close-btn) {
        color: white; 
    }

    .color{
        color: #C38154; 
    }
    
    /*========================================  *Media Queries*  ===============================================================*/

    @media (orientation: portrait) {
    /*
    =================================================================================================================================
        *NAV
    =================================================================================================================================
    */
    .navbar .close-btn{
        display: block;
        font-size: 40px;
        color: white;
        right: 10px;
        top: 10px;
        position: absolute;
        text-align: right;
    }
    .navbar .hamburger-btn {
        display: block;
        font-size: 40px;
        color: white;
    }
    .navbar {
        margin: 0;
        justify-content: space-between;
        height: 55px;
        padding: 5px 18px;
    }
    #logo  {
    }
    #logo a {
        font-size: 1.4rem;
        display: flex;
        flex-wrap: nowrap;
        gap: 10px;
        color: white;
    }
    #logo span {
        font-family: "Catalish Huntera";
        color: white;
    }
    .navbar .links {
        position: fixed;
        top: 0;
        z-index: 99999;
        left: -100%;
        display: block;
        height: 100vh;
        min-height: 100vh;
        width: 100%;
        padding-top: 60px;
        text-align: center;
        background: #C38154;    
        transition: 0.3s ease;
    }
    .navbar .links.show-menu {
        left: 0;
    }
    .navbar .links.hide-menu {
        left: -100%;
    }
    .navbar .links a {
        display: inline-flex;
        margin: 20px 0;
        font-size: 1.2rem;
        color: white;
        border: 2px solid transparent; 
        border-bottom: 2px solid white; 
        width: 90%;
        border-radius: 0;
    }
    .navbar .links a:hover {
        color: white;
    }
    .navbar .login-btn {
        font-size: 0.9rem;
        padding: 7px 10px;
        display: none; 
    }
    .navbar.scrolled {
        background-color: #C38154;  
        color: white;
    }
    .links a.scrolled,#logo a.scrolled {
        color:white; 
    }
    }
    @media only screen and (max-width: 990px) {
    /*
    =================================================================================================================================
        *NAV
    =================================================================================================================================
    */
    .navbar .close-btn{
        display: block;
        font-size: 40px;
        color: white;
        right: 10px;
        top: 10px;
        position: absolute;
        text-align: right;
    }
    .navbar .hamburger-btn {
        display: block;
        font-size: 40px;
        color: white;
    }
    .navbar {
        margin: 0;
        justify-content: space-between;
        height: 55px;
        padding: 5px 18px;
    }
    #logo  {
    }
    #logo a {
        font-size: 1.4rem;
        display: flex;
        flex-wrap: nowrap;
        gap: 10px;
        color: white;
    }
    #logo span {
        font-family: "Catalish Huntera";
        color: white;
    }
    .navbar .links {
        position: fixed;
        top: 0;
        z-index: 99999;
        left: -100%;
        display: block;
        height: 100vh;
        min-height: 100vh;
        width: 100%;
        padding-top: 60px;
        text-align: center;
        background: #C38154;    
        transition: 0.3s ease;
    }
    .navbar .links.show-menu {
        left: 0;
    }
    .navbar .links.hide-menu {
        left: -100%;
    }
    .navbar .links a {
        display: inline-flex;
        margin: 20px 0;
        font-size: 1.2rem;
        color: white;
        border: 2px solid transparent; 
        border-bottom: 2px solid white; 
        width: 90%;
        border-radius: 0;
    }
    .navbar .links a:hover {
        color: white;
    }
    .navbar .login-btn {
        font-size: 0.9rem;
        padding: 7px 10px;
        display: none; 
    }
    .navbar.scrolled {
        background-color: #C38154;  
        color: white;
    }
    .links a.scrolled,#logo a.scrolled {
        color:white; 
    }
}
</style>

