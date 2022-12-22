
<?php
    $intro = $data['intro'];
    $navbar = $data['navbar'];
    $logo = $data['logo'];
?>

<div class="hero" id="acc">
    
    <div class="navabar">
    <nav>
      <h2 class="logo"><?php echo $logo['1']?><span><?php echo $logo['2']?></span></h2>
                <ul>
            <?php foreach($navbar as $item):?>
                <?php print_r(""); ?>
                <?php if($item[0] !== "Contact"){ ?>
                        <li><a href="<?php echo $item[1] ?>"><?php echo $item[0]?></a></li>
                <?php }else{ ?>
                    </ul>
                        <a class="btn" href="<?php echo $item[1] ?>"><?php echo $item[0]?></a>

                        <input type="checkbox" id="bars">
                        <label for="bars" id="bars"><i class="fa-solid fa-bars"></i></label>
                    </nav>
                <?php } ?>
            <?php endforeach ?>  
    </div>

<div class="imagR">
    <img src="images/image3.jpg">
</div>

<div class="content">
    <h4><?php echo $intro['text1'] ?></h4>
    <h1><?php echo $intro['prenom'] ?> <span><?php echo $intro['nom'] ?></span></h1>
    <div class=ejsdwj><?php echo $intro['text2'] ?></div>    
</div>
</div>




