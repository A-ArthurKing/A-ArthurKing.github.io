<div class="form-popup">
        <form>
            <div class="formulaire">
                <span class="close-btn material-symbols-rounded">close</span>
                <div class="elementform">
                    <h2> Rendez-vous</h2>
                    <input type="text" placeholder="Tapez votre nom ici" id="firstnameuser">
                    <input type="text" placeholder="Tapez votre prénom ici" id="lastnameuser">
                    <select name="SOIN" id="soinsuser">
                        <option>MASSAGE</option>
                        <option>ÉPILATION</option>
                        <option>VISAGE</option>
                    </select>
                    <input type="date" placeholder="Date" id="daterdv">
                    <input type="time" placeholder="Heure" id="timerdv">
                    <input type="button" id="" class="btnreserver" value="RÉSERVER">
                </div>
            </div>
        </form>
</div>


<style>
    /*
    =================================================================================================================================
        *FORMULAIRE
    =================================================================================================================================
    */
    .form-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 10;
        width: 100%;
        opacity: 0;
        pointer-events: none;
        max-width: 720px;
        background: #fff;
        border: 2px solid #fff;
        transform: translate(-50%, -70%);
        border-radius: 35px;
    }

    .show-popup .form-popup {
        opacity: 1;
        pointer-events: auto;
        transform: translate(-50%, -50%);
        transition: transform 0.3s ease, opacity 0.1s;
        border-radius: 35px;
    }

    .form-popup .close-btn {
        position: absolute;
        top: 12px;
        right: 12px;
        color: white;
        cursor: pointer;
        z-index: 4;
    }

    .blur-bg-overlay {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
        height: 100%;
        width: 100%;
        opacity: 0;
        pointer-events: none;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        transition: 0.1s ease;
    }

    .show-popup .blur-bg-overlay {
        opacity: 1;
        pointer-events: auto;
    }

    .formulaire {
        background-color: white;
        display: flex;
        width: 50VW;
        height: 60vh;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        backdrop-filter: blur(50px);
        background-image:url(../images/bg01.jpg) ;
        background-repeat: no-repeat;
        background-size: cover;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        transition: 0.1s ease;
        border-radius: 14px;
    }

    .formulaire::after {
        content: "";
        position: absolute;
        background-color: rgb(0, 0, 0);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        transition: 0.1s ease;;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        opacity: 40%;
        z-index: 0;
        border-radius: 14px;
    }

    .elementform {
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        height: 85%;
        width: 85%;
        margin: auto;
        justify-items: center;
        align-items: center;
        align-content: center;
        z-index: 1;
    }

    .elementform h2 {
        color: white;
        font-size: 4vw;
        text-align: center;
        z-index: 1;
        font-family: "Catalish Huntera";
        font-weight: lighter;
    }

    #firstnameuser , #lastnameuser ,#soinsuser  {
        width: 210px;
        height: 40px;
        text-align: center;
        border:2px solid #694d45;
        border-radius: 9px;
    }


    #daterdv{
        width: 210px;
        height: 40px;
        text-align: center;
        border-radius: 5px;
        color: #694d45;
        border:2px solid #694d45;
        border-radius: 9px;
    }

    #timerdv{
        width: 210px;
        height: 40px;
        text-align: center;
        border-radius: 5px;
        color: #694d45;
        border:2px solid #694d45;
        border-radius: 9px;
    }

    .btnreserver {
        color: white;
        background-color:#694d45;
        font-weight: bold;
        padding: 10px 50px;
        transition: all 0.3s ease-in-out;
        border-radius: 9px;
    }

    .btnreserver:hover {
        color: white;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 10px 5px white;
    }

    ::placeholder {
        color: #694d45;
        opacity: 50%;
    }

    /*
    =================================================================================================================================
        *Media Queries*
    =================================================================================================================================
    */    
    @media only screen and (max-width: 990px) {
            /*============  *FORMULAIRE*  =========*/
    .form-popup {
        width: 95%;
    }
    .form-box .form-details {
        display: none;
    }
    .form-box .form-content {
        padding: 30px 20px;
    }
    .formulaire {
        width: 85VW;
        height: 75vh;
    }
    .elementform h2 {
        font-size: 6vw;
    }
    .elementform {
        height: 95%;
        width: 85%;    
    }
    .elementform  ::placeholder {
        font-size: 15px;  
    }
    .btnreserver{
        font-size: 15px;
    }
    }

</style>

