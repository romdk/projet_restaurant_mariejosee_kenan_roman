<?php
  session_start();

  $plat1 = "Escalope de poisson pané avec ses pommes de terre sauté";
  $plat2 = "Quiche de saison accompagnée de sa salade";
  $plat3 = "Spaghetti bolognaise et sa salade de saison";
  $plat4 = "Pizza aux 2 options";
  $plat5 = "Le risotto qui réchauffe le coeur";
  $plat6 = "Grillade de réconfort enfin le Week end";
  $plat7 = "Poulet rôti à la broche et ses accompagnements";
  $platDuJour = ['Lundi' => $plat1,'Mardi' => $plat2 ,'Mercredi' => $plat3,'Jeudi' => $plat4,'Vendredi' => $plat5,'Samedi' => $plat6,'Dimanche' => $plat7];

  $_SESSION['platDuJour'] = $platDuJour;
  ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./style/style_index.css" />
    <title>Le quai des machines</title>
    <link rel="shortcut icon" href="./images/logo.png" />
  </head>
  <body class="light">
    <div id="container">
      <header>
        
        <!--------------------------- TOP --------------------------------------->
        <section id="top">
          <div class="logo"><img src="./images/logo_2.png" alt="" /></div>
          <ul class="nav">
            <li class="header"><a href="#accueil">ACCUEIL</a></li>
            <li class="galerie"><a href="#galerie">GALERIE</a></li>
            <li class="plat"><a href="#plat">NOTRE MENU</a></li>
            <li class="evenements"><a href="#evenements">EVENEMENTS</a></li>
            <li class="contact"><a href="#contact">CONTACT</a></li>
            <li class="panier"><a href="panier.php">PANIER</a></li>
            <div class="indicateur"></div>
          </ul>
          <div class="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </section>

        <!------------------------- ACCUEIL -------------------------------------->
        <section id="accueil">
          <div class="center">
            <video class="video" muted autoplay loop>
              <source src="./images/video_restaurant.mp4" type="video/mp4" />
            </video>
            <div class="filter"></div>
            <img src="./images/logo.png" alt="" />
          </div>
          <div class="down">
            <a href="#galerie"><i class="fa-solid fa-chevron-down"></i></a>
          </div>
        </section>
      </header>

      <!------------------------ GALERIE -------------------------------------->
      <section id="galerie">
        <div class="gauche">
          <div class="images">
            <img src="./images/photo_restaurant_1.png" alt="" />
            <img src="./images/photo_restaurant_2.png" alt="" />
            <img src="./images/photo_restaurant_3.png" alt="" />
            <img src="./images/photo_restaurant_4.png" alt="" />
          </div>
          <div class="overlay"><h2>NOS LOCAUX</h2></div>
          <div class="boutons">
            <button class="btnGauche">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="btnDroite">
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </div>
        <div class="droite">
          <div class="images">
            <img src="./images/photo_plat_1.png" alt="" />
            <img src="./images/photo_plat_2.png" alt="" />
            <img src="./images/photo_plat_3.png" alt="" />
            <img src="./images/photo_plat_4.png" alt="" />
          </div>
          <div class="overlay"><h2>NOS PLATS</h2></div>
          <div class="boutons">
            <button class="btnGauche">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="btnDroite">
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </section>

      <!---------------------- PLAT DU JOUR ----------------------->
      <section id="plat">
        <!--<h1>Plat du jour de la semaine</h1>-->
        <!-- section gauche accordéon des plats de la semaine-->
        <div id="bodyPlat">
          <nav class="accordion">
            <header class="box">
              <label for="acc-close" class="box-title"
                >Plat du jour de la semaine</label
              >
              <!-- pdf vers le menu de la semaine dans un nouveau onglet-->
              <div class="Pdf">
                <a
                  href="./images/Plat du jour de la semaine.pdf"
                  target="_blank"
                  ><i class="fa-solid fa-file-pdf"></i
                ></a>
              </div>
            </header>
            <input type="radio" name="accordion" id="cb1" />
            <div class="box">
              <label class="box-title" for="cb1">Lundi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
                <p><?php echo $plat1 ?></p>
                <img
                  src="./images/platDuJourFish.png"
                  alt="Une assiette d'escalope de poisson pané avec ses pommes de terre sauté. Ainsi que ses lardons et ces compos de ciboulette accompagnée d'une sauce ketchup."
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb2" />
            <div class="box">
              <label class="box-title" for="cb2">Mardi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat2 ?></p>
                <img
                  src="./images/platDuJourQuiche.png"
                  alt="Photo d'une quiche de saison sur son assiette blanche"
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb3" />
            <div class="box">
              <label class="box-title" for="cb3">Mercredi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat3 ?></p>
                <img
                  src="./images/platDuJourBolo.png"
                  alt="Assiette de spaghetti bolognaise"
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb4" />
            <div class="box">
              <label class="box-title" for="cb4">Jeudi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat4 ?></p>
                <img
                  src="./images/platDuJourPizza.png"
                  alt="Pizza sur sa plache de bois"
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb5" />
            <div class="box">
              <label class="box-title" for="cb5">Vendredi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat5 ?></p>
                <img
                  src="./images/PlatDuJourRissoto.png"
                  alt="Assiette de rissoto"
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb6" />
            <div class="box">
              <label class="box-title" for="cb6">Samedi</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat6 ?></p>
                <img
                  src="./images/platDuJourGrillade.jpg"
                  alt="Grillade de viande au barbecue"
                />
              </div>
            </div>
            <input type="radio" name="accordion" id="cb7" />
            <div class="box">
              <label class="box-title" for="cb7">Dimanche</label>
              <label class="box-close" for="acc-close"></label>
              <div class="box-content">
              <p><?php echo $plat7 ?></p>
                <img
                  src="./images/platDuJourPoulet.png"
                  alt="Poulet rôti à la broche et ses accompagnements"
                />
              </div>
            </div>

            <input type="radio" name="accordion" id="acc-close" />
          </nav>
        </div>
        <!-- section droite avec le croquis d'un chef cuisinier-->
        <div class="platDroite">
          <img
            src="./images/chef.png"
            alt="photo d'un chef cuisinier transportent une assiette sous"
          />
        </div>
      </section>
      <!------------------------------- EVENEMENTS ------------------------------->
      <section id="evenements">
        <!-- <h1 class="titre">Les Evenements</h1> -->
        <div class="conEvenement">
          <div class="evenvement">
            <img
              class="concerteImg"
              id="1"
              src="./images/restaurant-concert-1.jpg"
              alt=""
            />
            <div class="exEvenement">
              <span class="text">Memphis Special</span>
              <span class="text1"
                >Après sa victoire à Memphis Special, le groupe annonce un
                concert au QUAI DES MACHINES</span
              >
              <span class="text">Le 25-02-23 </span>
              <span class="text">à 22:00h</span>
            </div>
          </div>
          <div class="evenvement">
            <img
              class="concerteImg"
              id="2"
              src="./images/exposition.jpg"
              alt=""
            />
            <div class="exEvenement">
              <span class="text"> Amitiés, créativité</span>
              <span class="text1"
                >Philosophes, écrivains, musiciens, Les artistes ont souvent
                misé sur l’amitié et la rencontre d’énergies créatrices pour
                produire des œuvres collaboratives spontanées</span
              >
              <span class="text">Le 25-03-23 </span>
              <span class="text">à 22:00h</span>
            </div>
          </div>
          <div class="evenvement">
            <img class="concerteImg" id="3" src="./images/jeu.png" alt="" />
            <div class="exEvenement">
              <span class="text">Memphis Special</span>
              <span class="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quam et enim dolorum delectus quis ducimus quos odit nemo ex.</span>
              <span class="text">Le 25-01-23 </span>
              <span class="text">à 22:00h</span>
            </div>
          </div>
        </div>
      </section>

      <!------------------------------------------------CONTACT------------------------------------------->
      
      <section id="contact">
        
        

       <?php
       echo'
        <form action="traitement.php?action=ajouterReservation" method="post">
          <h3>Contactez-nous</h3>
          <div class="nomPrenom">
            <span><i class="fa-solid fa-user"></i></span>
            <input id="nom" type="text" name="name" placeholder="Entrez votre nom et prenom" />
            <!-- <input id="prenom" type="text" placeholder="Entrez votre prénom"/><br /> -->
            <input type="number" id="tentacles" name="nbPersonne" placeholder="NB des personnes" min="1" max="200"> 
       
          </div>
         
          <div class ="nomPrenom">
              <select name="jour">
                  <option selected="yes">lundi</option>
                  <option >mardi</option>
                  <option>mercredi</option>
                  <option>jeudi</option>
                  <option>vendredi</option>
                  <option>samedi</option>
                  <option>dimanche</option>
              </select>
       
              <select name="heure" id="heure">
                  <option selected="yes">midi</option>
                  <option >soir</option>
              </select>

              <select name="creneau" id="horaires">
              <div id="midi">
                  <option selected="yes">12h</option>
                  <option class="midi" >12h15</option>
                  <option class="midi">12h30</option>
                  <option class="midi">12h45</option>
                  <option class="midi">13h</option>
                  <option class="midi">13h15</option>
                  <option class="midi">13h30</option>
                  <option class="midi">13h45</option>
                  <option class="midi">14h</option>
              </div>
              <div id="soir">
                  <option selected="yes">12h</option>
                  <option class="soir hidden">12h15</option>
                  <option class="soir hidden">12h30</option>
                  <option class="soir hidden">12h45</option>
                  <option class="soir hidden">13h</option>
                  <option class="soir hidden">13h15</option>
                  <option class="soir hidden">13h30</option>
                  <option class="soir hidden">13h45</option>
                  <option class="soir hidden">14h</option>
              </div>
          </select>
          </div>
         
          <div class="email">
            <span><i class="fa-solid fa-envelope"></i></span>
            <input
              id="email"
              type="text" name="email"
              placeholder="Entrez votre email"
            /><br />
          </div>
          <div class="message">
            <i class="fa-solid fa-message"></i>
            <textarea
              id="message" name="message"
              placeholder="Entrez votre message"
            ></textarea>
            <br />
          </div>
          <div class="envoyer">
            <input type="submit" name="envoyer" value="Envoyer" />
          </div>
        </form>';

        ?>


        <div class="map">
          <h3>Trouvez-nous</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.5325280060424!2d-1.5666316842027561!3d47.20616162354665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805eb8b82fb4c7f%3A0xb1bb929d858aecf9!2sLes%20Machines%20de%20l&#39;%C3%8Ele!5e0!3m2!1sfr!2sfr!4v1664267002933!5m2!1sfr!2sfr"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </section>
      <!-- ---------------------------------------BOUTON RETOUR TOP -------------------------------------->
      <div class="back-to-top">
        <a href="#accueil"><i class="fa-solid fa-chevron-up"></i></a>
      </div>
      <!----------------------------------------- BOUTON DARK MODE ----------------------------------------->
      <div class="btn-toggle">Go Dark</div>

      <!--<div class = "Light"><a href=" "></i>="fa-solid fa-sun-bright"></i> </a> </div>

        <div class = "Dark"></div><a href=" "></i>="fa-solid fa-moon-stars"></i> </a> </div>-->

      <!---------------------------------------------- FOOTER ---------------------------------------------->
      <footer id="footer">
        <div class="horaires">
          <h3>Horaires</h3>
          <span>Le quai des machines vous accueille : </span>
          <span>Du lundi au vendredi : 11h45 – 14h et 18h – 22h</span>
          <span>Samedi : 11h30 – 14h et 19h – 23h</span>
          <span>Dimanche : 12h – 15h</span>
        </div>
        <div class="logo"><img src="./images/logo.png" alt="" /></div>
        <div class="reseaux">
          <h3>Suivez-nous</h3>
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
      </footer>
    </div>
    <!--------------------------------- JS -------------------------------->
    <script src="./js/scroll.js"></script>
    <script src="./js/caroussel.js"></script>
    <script src="./js/accordeon.js"></script>
    <script src="./js/evenement.js"></script>
    <script src="./js/burger.js"></script>
    <script src="./js/darkmode.js"></script>
    <script src="./js/form.js"></script>
  </body>
</html>


<?php

?>