<?php
    session_start();

    if(!isset($_SESSION['id']) && !isset($_SESSION['mdp'])){
        $_SESSION['erreurConnect']=false;
        header("location: connect_id.php");
    }else{
      include 'header.php';
        ?>
<body>
  <div id="circle" class="blue-color"></div>
  <div id="circle2" class="blue-color"></div>
  <div id="circle3" class="blue-color"></div>
  <div id="circle4" class="blue-color"></div>
  <div id="circle5" class="blue-color"></div>
  <div id="circle6" class="blue-color"></div>
  <div id="circle7" class="blue-color"></div>
    <div class="container text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col change_color blue-text" id="title"><h1>SEXINFO</h1></div>
          <div class="col"></div>
        </div>
    </div>
    <div>
      <ul class="navbar_fond">
        <li id="blue"></li>
        <li id="rose"></li>
        <li id="vert"></li>
        <li id="jaune"></li>
        <li id="orange"></li>
      </ul>
    </div>

    <div class="nav_content rounded-pill">
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <a href="accueil.html" class="text-decoration-none text-dark">Accueil</a>
          </div>
          <div class="col">
            <a href="jeux.html" class="text-decoration-none text-dark">Jeux</a>
          </div>
          <div class="col">
            <a href="informations.html" class="text-decoration-none text-dark">Informations</a>
          </div>
          <div class="col">
            <a href="informations.html" class="text-decoration-none text-dark">F.A.Q</a>
          </div>
          <div class="col">
            <a href="inscription.php" class="text-decoration-none text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </a>
          </div>
        </div>
      </div>
    
        
        
    </div>
</body>

<?php
include 'footer.php';
        }
?>
