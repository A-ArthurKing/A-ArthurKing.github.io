<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifs</title>

    <!-- Favicon -->
    <link href="../images/Plan de travail 20.png" rel="icon">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2b1a7acadb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./css/Style.tarifs.css">
    <link rel="stylesheet" href="./css/font.css">
</head>

<body>

    <header id="header">
        <?php require 'navbar.php' ;?>
        <div class="header-txt">
            <h1 class="title">Nos <span> Tarifs</span></h1>
        </div>
    </header>
    <?php require 'formulairerdv.php' ;?>

    <div class="wrapper">
      <h1>Nos promotions</h1>
      <i class=" left fa-solid fa-angles-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="./images/massage.jpg" alt="img" draggable="false"></div>
          <h2>Mon Premier Flirt</h2>
          <span>15 000 FCFA</span>
        </li>
        <li class="card">
          <div class="img"><img src="./images/bg01.jpg" alt="img" draggable="false"></div>
          <h2>Mon amour</h2>
          <span>15 000 FCFA</span>
        </li>
        <li class="card">
          <div class="img"><img src="./images/g70.jpg" alt="img" draggable="false"></div>
          <h2>Mon premier soins</h2>
          <span>15 000 FCFA</span>
        </li>
        <li class="card">
          <div class="img"><img src="./images/z3-1.jpg" alt="img" draggable="false"></div>
          <h2>Pack Love</h2>
          <span>15 000 FCFA</span>
        </li>
        <li class="card">
          <div class="img"><img src="./images/z8.jpg" alt="img" draggable="false"></div>
          <h2>Pack My Love</h2>
          <span>15 000 FCFA</span>
        </li>
        <li class="card">
          <div class="img"><img src="./images/z6.jpg" alt="img" draggable="false"></div>
          <h2>Pack amour</h2>
          <span>15 000 FCFA</span>
        </li>
      </ul>
      <i  id="right"  class="fa-solid fa-angles-right"></i>
    </div>


        <ul class="bardenavigations">
            <li id="btn-Massages">Massages      <i class="fa-solid fa-hand-sparkles"></i></li>
            <li id="btn-Soins">Soins            <i class="fa-solid fa-spa"></i></li>
            <li id="btn-Gommages">Gommages      <i class="fa-solid fa-wand-magic-sparkles"></i></li>
            <li id="btn-Épilations">Épilations  <i class="fa-brands fa-pagelines"></i></li>
            <li id="btn-Masques">Masques        <i class="fa-solid fa-spa"></i></li>
            <li id="btn-Visage">Visages         <i class="fa-solid fa-fan"></i></li>
        </ul>
        <div class="listsoins" id="listsoins">

        </div>

    
    <section class="massage" id="massages">
      <div class='card-prix'>
        <img src="./images/g70.jpg">
        <div class=cardprix-txt>
            <h2>Massage Anti-Âge Japonais :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>30 minutes </h4>
             <p>Le massage anti-âge japonais tonifie les muscles, stimule la circulation et favorise le renouvellement cellulaire pour une peau rajeunie.</p>
            <h3>10 000 FCFA</h3>
            <button id="toggle-button" class="toggle-button">Afficher plus</button>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/petiteimg_massage.jpg">
        <div class=cardprix-txt>
            <h2>Massage Californien :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le massage californien détend les muscles, soulage le stress et favorise une sensation de bien-être.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/massage.jpg">
        <div class=cardprix-txt>
            <h2>Massage Complet :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
             <p>Le massage complet d'une heure couvre tout le corps pour une expérience holistique de détente et de bien-être..</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/massage.jpg">
        <div class=cardprix-txt>
            <h2>Massage Complet :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage complet de 40 minutes  couvre tout le corps pour une expérience holistique de détente et de bien-être.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/Instasize Upscaler.png">
        <div class=cardprix-txt>
            <h2>Massage Pour femme enceinte</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage pour femme enceinte de 40 minutes est conçu pour répondre aux besoins spécifiques des femmes enceintes.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/mb.jpg">
        <div class=cardprix-txt>
            <h2>Massage Japonais :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le massage japonais équilibre l'énergie du corps et favorise le bien-être physique et mental.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/z6.jpg">
        <div class=cardprix-txt>
            <h2>Massage Kinésithérapie:</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage kinésithérapie soulage la douleur, améliore la mobilité et restaure la fonctionnalité du corps.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/z5.jpg">
        <div class=cardprix-txt>
            <h2>Massage Localisé :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
             <p>Le massage localisé d'une heure cible une zone spécifique du corps pour soulager tensions ou douleurs.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/z5.jpg">
        <div class=cardprix-txt>
            <h2>Massage Localisé :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage localisé cible une zone spécifique du corps pour soulager tensions ou douleurs.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/bg011.jpg">
        <div class=cardprix-txt>
            <h2>Massage aux Pierres Chaudes :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage aux pierres chaudes utilise des pierres chauffées pour détendre les muscles et soulager les tensions.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/z1.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant:</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
             <p>Le massage relaxant offre une détente profonde et soulage le stress.</p>
            <h3>18 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/z1.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage relaxant offre une détente profonde et soulage le stress..</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/huilechaudes.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant avec Huiles Chaudes :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage relaxant avec huiles chaudes combine détente et propriétés nourrissantes des huiles chaudes..</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/z4.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant avec Huiles et Serviettes Chaudes :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage relaxant avec huiles et serviettes chaudes offre détente et chaleur réconfortante.</p>
            <h3>25 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/mm.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant du Visage :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>20 minutes </h4>
             <p>Le massage relaxant du visage détend les muscles, soulage les sinus et favorise une sensation de bien-être..</p>
            <h3>6 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/z4.jpg">
        <div class=cardprix-txt>
            <h2>Massage Relaxant avec Serviettes Chaudes :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage relaxant avec serviettes chaudes apporte confort et relaxation supplémentaires au massage traditionnel.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/Design-sans-titre-71.png">
        <div class=cardprix-txt>
            <h2>Massage Suédois :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le massage suédois détend les muscles, soulage les tensions et favorise la circulation sanguine.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/massage-thai-paris-2-1-1.jpg">
        <div class=cardprix-txt>
            <h2>Massage Thaïlandais :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le massage thaïlandais combine étirements, compressions et pressions pour favoriser détente, flexibilité et équilibre énergétique.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/z9.jpg">
        <div class=cardprix-txt>
            <h2>Massage Thérapeutique:</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le massage thérapeutique soulage les douleurs, améliore la mobilité et favorise la récupération après blessure ou chirurgie.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>
    </section>





    <section class="soins" id="soins">
      <div class='card-prix'>
        <img src="./images/sauna1.jpg">
        <div class=cardprix-txt>
            <h2>Hammam :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure 30 minutes</h4>
             <p>Le hammam consiste à se détendre dans une pièce chaude. La vapeur ouvre les pores et aide à éliminer toxines et impuretés.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>

  <div class='card-prix'>
        <img src="./images/Sauna.jpg">
        <div class=cardprix-txt>
            <h2>Sauna :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>10 à 15 minutes </h4>
             <p>Le sauna consiste à s'asseoir dans une pièce très chaude, favorisant transpiration, détente et élimination des toxines.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

  <div class='card-prix'>
        <img src="./images/coupdoeil_enveloppement.jpg">
        <div class=cardprix-txt>
            <h2>Soin Enveloppement Corporel :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le soin enveloppement corporel implique d'appliquer une solution sur le corps, puis d'envelopper avec des bandages ou une couverture thermique.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

  <div class='card-prix'>
        <img src="./images/mm.jpg">
        <div class=cardprix-txt>
            <h2>Soin Traitement Corps :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le soin traitement corps est une prestation spa personnalisée pour répondre aux besoins spécifiques de la peau et du corps.</p>
            <h3>35 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/zz.jpg">
        <div class=cardprix-txt>
            <h2>Rituel de Soins :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
             <p>Un rituel de soins combine exfoliation, enveloppement, massage et produits spécifiques pour nourrir la peau, détendre muscles et calmer l'esprit.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>
    </section>




    <section class="gommages" id="gommages">
      <div class='card-prix'>
        <img src="./images/bg04.jpg">
        <div class=cardprix-txt>
            <h2>Gommage Corps Nettoyant :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>30 minutes </h4>
             <p>Le gommage corporel nettoie la peau, élimine cellules mortes et impuretés, aide au renouvellement cellulaire pour une peau douce hydrater.</p>
            <h3>10 000 FCFA</h3>
        </div>
      </div>

      <div class='card-prix'>
        <img  src="./images/high-angle-woman-getting-massaged-spa.jpg">
        <div class=cardprix-txt>
            <h2>Gommage Corps Clarifiant :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le gommage corporel clarifiant exfolie la peau, éliminant cellules mortes et impuretés pour un teint plus uniforme et éclatant.</p>
            <h3>10 000 FCFA</h3>
        </div>
      </div>

      <div class='card-prix'>
        <img src="./images/woman-spending-time-spa-getting-exfoliation-massage.jpg">
        <div class=cardprix-txt>
            <h2>Gommage Corps Éclaircissant :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
             <p>Le gommage corporel éclaircissant exfolie la peau pour uniformiser le teint et réduire les taches sombres, favorisant une peau lumineuse et éclatante.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

      <div class='card-prix'>
        <img src="./images/side-view-woman-getting-massaged-spa.jpg">
        <div class=cardprix-txt>
            <h2>Gommage Corps Éclat : </h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>30 minutes</h4>
             <p>Le gommage corps éclat exfolie la peau, stimule la circulation sanguine, élimine cellules mortes, révèle un teint radieux et une peau plus lisse.</p>
            <h3>10 000 FCFA</h3>
        </div>
      </div>
  </section>


  

    
    <section class="epilation" id="epilation">
      <div class='card-prix'>
        <img src="./images/épilation-du-maillot-brésilien-1024x675.jpg">
        <div class=cardprix-txt>
            <h2>Épilation Maillot Brésilien :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>20 minutes max </h4>
             <p>L'épilation du maillot brésilien enlève les poils de la région pubienne et des côtés du pubis, laissant une fine bande de poils.</p>
            <h3>7 500 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/epil.webp">
        <div class=cardprix-txt>
            <h2>Épilation du Maillot Intégral :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes max </h4>
             <p>L'épilation du maillot intégral supprime tous les poils de la région pubienne, y compris les côtés, laissant la peau complètement lisse.</p>
            <h3>15 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/épilation.jpg">
        <div class=cardprix-txt>
            <h2>VAJASIALE :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>Le vajacial est un soin esthétique pour la région pubienne, offrant bien-être et épilation dans certains salons ou instituts.</p>
            <h3>20 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/epilmenton.jpg">
        <div class=cardprix-txt>
            <h2>Épilation du Menton :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>20 minutes max </h4>
             <p>L'épilation du menton enlève les poils indésirables de la zone, offrant une peau lisse et nette sur cette partie du visage.</p>
            <h3>3 000 FCFA</h3>
        </div>
      </div>

 <div class='card-prix'>
        <img src="./images/tondeuse-et-femme-noire-avec-dermatologie-de-bien-être-nettoyage-des-cheveux-du-visage-épilation-la-peau-routine-beauté-propre-270329806.webp">
        <div class=cardprix-txt>
            <h2>Épilation du Visage :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>20 minutes max </h4>
             <p>L'épilation du visage supprime les poils indésirables sur différentes zones, y compris les sourcils, la lèvre supérieure, les joues et le menton.</p>
            <h3>5 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./Images/epil.webp">
        <div class=cardprix-txt>
            <h2>Épilation des Bras :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>15 minutes max </h4>
             <p>L'épilation des bras enlève les poils indésirables de la surface des bras, des épaules aux poignets.</p>
            <h3>6 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/epilation-laser-definitive-peau-noire.jpg">
        <div class=cardprix-txt>
            <h2>Épilation (Complètes des jambes):</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
             <p>L'épilation des jambes complètes enlève les poils sur toute la surface, des cuisses aux chevilles.</p>
            <h3>16 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./Images/epil.webp">
        <div class=cardprix-txt>
            <h2>Épilation (Demi- jambes) :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>30 minutes </h4>
             <p>L'épilation DEmi-jambes élimine les poils de la moitié inférieure des jambes, de genoux aux chevilles..</p>
            <h3>12 000 FCFA</h3>
        </div>
      </div>

<div class='card-prix'>
        <img src="./images/epilation-ce-qu-il-peut-arriver-si-vous-vous-rasez-les-bras.jpeg">
        <div class=cardprix-txt>
            <h2>Épilation du Corps :</h2>
            <h4><i class="fa-solid fa-hourglass-end"></i>1 heure 30 minutes</h4>
             <p>L'épilation du corps enlève les poils indésirables sur différentes zones, y compris les bras, aisselles, dos, ventre et autres parties du corps.</p>
            <h3>30 000 FCFA</h3>
        </div>
      </div>
    </section>





  <section class="masques" id="masques">
    <div class="card-prix">
      <img src="./images/bg03.jpg">
      <div class=cardprix-txt>
          <h2>Masque Unifiant :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes</h4>
           <p>Le masque unifiant aide à uniformiser le teint et réduit les taches sombres, cicatrices et imperfections pour une peau lisse et éclatante.</p>
          <h3>10 000 FCFA</h3>
      </div>
    </div>


<div class='card-prix'>
      <img src="./images/bg02.jpg">
      <div class=cardprix-txt>
          <h2>Masques et Massage :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
           <p>Le Masques ciblent besoins de la peau, & le massage relaxant améliore circulation et absorption pour une détente totale et peau éclatante.</p>
          <h3>20 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
      <img src="./images/z8.jpg">
      <div class=cardprix-txt>
          <h2>Masque Éclaircissant :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
           <p>Les masques éclaircissants réduisent les taches pigmentaires et unifient le teint.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
      <img src="./images/z7.jpg">
      <div class=cardprix-txt>
          <h2>Masques Nourrissants :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
           <p>Les masques éclaircissants réduisent les taches pigmentaires et unifient le teint.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

  </section>




  <section class="visages" id="visages">
    <div class='card-prix'>
      <img src="./images/bg10.jpg">
      <div class=cardprix-txt>
          <h2>Hydrafacial :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
           <p>Hydrafacial est un soin du visage avancé combinant exfoliation, extraction, hydratation et protection de la peau dans une procédure non invasive.</p>
          <h3>25 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
    <img src="./images/bg10.jpg">
    <div class="cardprix-txt">
          <h2>Soin Visage Anti-Âge :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
           <p>Le soin du visage anti-âge cible les rides, ridules, relâchement cutané et perte d'élasticité.</p>
          <h3>25 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
      <img src="./images/img.png">
      <div class="cardprix-txt">
          <h2>Soin Visage Complet :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
           <p>Le soin du visage complet purifie, nourrit et revitalise la peau du visage.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class="cardprix-txt">
          <h2>Soin Visage Dermaplaning :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
           <p>Le dermaplaning exfolie la couche supérieure de la peau à l'aide d'un scalpel fin.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class="cardprix-txt">
          <h2>Soin Visage Éclat :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>20 minutes max </h4>
           <p>Le soin du visage éclat redonne luminosité et vitalité à la peau en ciblant fatigue, teint terne et imperfections.</p>
          <h3>5 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class="cardprix-txt">
          <h2>Soin Visage et Jelly Masque :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
           <p>Le soin du visage avec jelly masque combine un soin complet et un masque gélatineux, offrant bienfaits cutanés et expérience sensorielle.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Intense :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
           <p>Le soin du visage intense cible les besoins spécifiques de la peau : hydratation, rides, ridules, acné, taches pigmentaires.</p>
          <h3>20 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Nettoyant :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>35 minutes </h4>
           <p>Le soin du visage nettoyant purifie la peau en profondeur, éliminant impuretés, excès de sébum et résidus de maquillage.</p>
          <h3>10 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Nourrissant :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>40 minutes </h4>
           <p>Le soin du visage nourrissant apporte nutriments et hydratation pour équilibre et élasticité, idéal pour peaux sèches ou déshydratées.</p>
          <h3>10 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Traitement des Taches :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
           <p>Le soin du visage traitement des taches cible taches pigmentaires, taches de vieillesse, solaires, cicatrices d'acné ou autres irrégularités.</p>
          <h3>15 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Traitement Acnéique :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>1 heure </h4>
           <p>Le soin du visage traitement acnéique cible les éruptions cutanées, imperfections et autres problèmes liés à l'acné.</p>
          <h3>30 000 FCFA</h3>
      </div>
    </div>

<div class='card-prix'>
  <img src="./images/img.png">
  <div class=cardprix-txt>
          <h2>Soin Visage Profond :</h2>
          <h4><i class="fa-solid fa-hourglass-end"></i>45 minutes </h4>
           <p>Le soin du visage profond traite les couches internes de la peau pour cibler acné, rides, taches et déshydratation.</p>
          <h3>10 000 FCFA</h3>
      </div>
    </div>

  </section>


  <?php require 'footer.php'; ?>
    <script src="./js/Index - Tarif.js"> </script>
</body>
</html>


