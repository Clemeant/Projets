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
                echo '<i class="fa-brands '.$competence['logo'].'"></i>';
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