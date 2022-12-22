<?php
$title = $data['title']
?>

<div class="competences" id="comp">
    <div class="title"><?php echo $title['1']?></div>

    <div class="cpts">
    <?php
        $data=yaml_parse_file("donnees.yaml");
        $competence=$data["competence"];
        foreach($competence as $key=>$domaine): ?>
            <div class="box">
            <h3><?php echo $key ?></h3>
            <?php foreach($domaine as $competence): ?>
               <div class="card">
               <i class="fa-brands <?php echo $competence['logo'] ?>"></i>
               <h5><label for="pourcentage"><?php echo $competence['nom'] ?></label></h5>
               <div class="pra">
               <p><input type="range" name="pourcentage" min="0" max="100" value="<?php echo $competence['niveau'] ?>"> <?php echo $competence['niveau'] ?> %</p> 
               </div>
               </div>
            <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </div>
</div>