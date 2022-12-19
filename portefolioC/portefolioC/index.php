<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio by csh</title>

    <link rel="stylesheet" href="style.css">


    <script src="https://kit.fontawesome.com/f0ad015a5b.js" crossorigin="anonymous"></script>


</head>
<body>
    
    <!--section acceuil-->

        <div class="hero" id="acc">
          
            <div class="navabar">
            <nav>
                <h2 class="logo">Portfo<span>lio</span></h2>
                <ul>
                    <li><a href="#acc">Acceuil</a></li>
                    <li><a href="#apropos">A Propos</a></li>
                    <li><a href="#comp">Compétences</a></li>
                    <li><a href="#exp">Experiences</a></li>
                    <li><a href="#for">Formation</a></li>
                </ul>
                <a href="#sub" class="btn">Me Contacter</a>
            </nav>
            </div>
            </div>

            <div class="content">
                <h4>Bonjour, je m'appel</h4>
                <h1>Clément <span>Saint-Hilaire</span></h1>
                <h3>Et je suis un Developeur Web Junior</h3>
                <div class="newslatter">
                    <form>
                      <!--  <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                        <imput type="submit" name="submit" value="Lets Start">
                    </form>
                </div>-->
                <button class="buttonsuite"><a href="#apropos" class="none">Suite</a></button>    

            </div>

        </div>

    <!--section à propos-->

<section class="about" id="apropos">
    <div class="main" >
        <img src="images/image.png">
        <div class="about-text">
            <h2>A Propos</h2>
            <h5>Developeur <span>& Designer</span></h5>
            <p>Actuellement étudiant à Caen, je fait mes débuts dans le monde du résaux, du design et du développement web. C'est pourquoi je met mes services à votre dispositon, dans le cadre de la création d'un site internet par exemple.</p>
            <button class="buttonsuite"><a href="#comp">Suite</a></button>
        </div>
    </div>
</section>
   
    <!--section compétences -->

<div class="service" id="comp">
    <div class="title">
        <h6>Compétences</h6> 
    </div>

    <?php
        $data=yaml_parse_file("donnees.yaml");
        foreach($data AS $domaine=>$tab){
            echo '<div class="box">';
            echo '<h3>'.$domaine.'</h3>';
            foreach($tab AS $competence){
                echo '<div class="card">';
                echo '<i class="fa-brands fa-'.$competence['logo'].'"></i>';
                echo '<h5>'.$competence['nom'].'</h5>';
                echo '<div class="pra">';
                echo '<p>'.$competence['niveau'].'</p>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        }
    ?>

 </div>


    <!--section exepriences-->

<div class="experiences" id="exp">
        <div class="title">
            <h2>Experiences</h2>
        </div>
        
      <div class="carrousel">
        <article class="card2">
            <i class="fa-solid fa-user-gear"></i>
            <h5>Alternant résaux & dev</h5>
            <p>Depuis Septembre 2022 j'occupe le poste d'alternant dans la communauté de commune <a href="https://www.coeurcotefleurie.org" class="dl">CoeurCôteFleurie</a>. J'y realise une serie de rôles, tel que, le support utilisateurs, l'analyste cybersécurité, la mise à jour de bandes de sauvegardes, le développemetn de templates ou de projets sur demandes.</p>
        </article>
        <article class="card2">
            <i class="fa-solid fa-earth-europe"></i>
            <h5>Conseiller en Séjour</h5>
            <p>Lors de mes été 2021 et 2022, j'ai occupé le post de conseiller en séjour pour <a href="https://www.indeauville.fr" class="dl">Indeauville</a>. Mon travail consistait en l'acceuil de personne, en la recommandation de visites, d'activités personnalisé suivant le type de client.</p>
        </article>
        <article class="card2">
            <i class="fa-solid fa-mug-saucer"></i>
            <h5>Serveur</h5>
            <p>Pendant mes été de 2015 à 2020, j'ai eu la chance d'avoir été serveur dans le salon de th crêperie <a href="http://www.aux3gourmandsduchateau.fr" class="dl">Aux 3 Gourmands du Chateaux</a>. Je gérais à la fois le service, mais également l'acceuil, la plonge, le dressage, et la confections des thé et cafés.</p>
        </article>
        <article class="card2">
            <i class="fa-solid fa-gavel"></i>
            <h5>Assistant Commissair-Priseur</h5>
            <p>Après avoir été repéré un été par le commissaire priseur James Fattorilors, j'ai pu en avril 2017 efféctuer un stage dans l'étude <a href="https://tradart-deauville.auction.fr" class="dl">Tradart</a>. J'y ai pu faire du secrétariat, mais surtout de l'assistance à l'estimation de pièce de vente.</p>
        </article>
        <article class="card2">
            <i class="fa-sharp fa-solid fa-user-tie"></i>
            <h5>Assistant Avocat</h5>
            <p>En Octobre 2021, j'ai eu l'occasion d'effectuer un stage au <a href="https://www.jean-pimor-avocats.fr" class="dl">Cabinet d'Avocats Mandataire au Tribunal de Commerce de Paris</a>. Maître Philippe Jean-Pimor à pu m'emener dans plusieurs juridictions, assister à plusieurs séances. En plus de l'observation, j'y ai fait de l'assistance et du secrétariat.</p>
        </article>
       
        
             
      </div>

      <div class="cbuttonCV">
        <button type="buttonCV"><a href=images/CV.pdf.pdf>CV.pdf</a></button>
     </div>
</div>

    <!--section formation-->

<div class="formation" id="for">
    <div class="main">
        <img src="images/CaenSup_x_4CF.png">
        <div class="formation-text">
            <h2>Formations</h2>
            <h5>Etudiant <span>& Alternant</span></h5>
            <p>à CaenSup Sainte-Ursule, j'ai intégré la communauté de commune Coeur cote fleurie en poste d'alternat pour 2 ans. Je me forme au support client, au développement de projets personnalisé, et à la configurationio résaux.</p>
            <button class="buttonf">Sainte-Ursule</button>
            <button class="buttonf">CoeurCôteFleurie</button>
            <button class="buttonf"><a href=images/CV.pdf.pdf class="none">CV.pdf</a></button>
        </div>
    </div>

    

</div>    

    <!--Me Contacter -->
      
    <div class="contact-me" id="sub">
        <p>Laissez moi créer votre prochain site web !</p>
        <a class="button-two" href="#">M'enbaucher</a>
    </div>

    <!--sections social-->

 <footer>
    <p>Vous pouvez également me contacter sur mes résaux sociaux.</p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></i></a>
            <a href="https://instagram.com/sh_clement?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></i></a>
            
        </div>

        <div class="end">
            <p>made by csh</p>
        </div>
 </footer>   









                     


</body>
</html>
