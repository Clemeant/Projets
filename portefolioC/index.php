<?php $data=yaml_parse_file("donnees.yaml");?>


<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">   
    <script src="https://kit.fontawesome.com/f0ad015a5b.js" crossorigin="anonymous"></script>   
    <title>PortFolio by csh</title>

</head>
<body>

<?php

include ('./php/1-acceuil.php');
include ('./php/2-apropos.php');
include ('./php/3-competence.php');
include ('./php/4-experience.php');
include ('./php/5-formation.php');
include ('./php/6-contact.php');
include ('./php/7-footer.php');

?>

</body>
</html>
