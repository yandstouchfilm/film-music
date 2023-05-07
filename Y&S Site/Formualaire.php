<!DOCTYPE html>
<html>
<head>
<title>Y&S Touche site</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    
    body, html {
      height: 100%;
      line-height: 1.8;
    }
    
    /* Full height image header */
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      min-height: 100%;
    }
    
    .w3-bar .w3-button {
      padding: 16px;
    }
</style>
</head>
<body id="Contact">

<br>
<br>
<br>
<h2>Formulaire de Contact</h2>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Accueil</a>
  <a href="Profil.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profil</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Mes Contenues</a>
  <a href="Formualaire.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
    </div>
</div>
</div>





<!-- Contact  -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contactez Moi</span></div>
        <h3>Address</h3>
        <p>Boulogne Billancourt</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  France, Paris</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +77777777</p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
      </div>

      <div class="w3-col m7">
        <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="traitement.php" target="_blank">
        <div class="w3-section">      
          <label>Nom</label>
          <input class="w3-input" type="text" name="Nom" required>
        </div>

        <div class="w3-section">      
            <label>Prenom</label>
            <input class="w3-input" type="text" name="Prenom" required>
          </div>

        <div class="w3-section">      
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>

        <div class="w3-section">      
          <label>Message</label>
          <input class="w3-input" type="text" name="Messag" required>
        </div>  

        <button type="submit" class="w3-button w3-right w3-theme" name="envoyer">Envoyer</button>

        </form>
      </div>
    </div>
  </div>
</body>
</html>