<?php
    $contact = $data['contact'];
    $formulaire = $data['formulaire'];
?>
<div class="contact-me" id="sub">
    <p><?php echo $contact['1'] ?></p>
    

<div class=formulaireC>
    <p><?php echo $formulaire['1']?><p>
    <form action="/formulaireC" method="post">
    <div>
        <label for="name"><?php echo $formulaire['2']?></label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name"><?php echo $formulaire['3']?></label>
        <input type="text" id="enteprise" name="company_name">
    </div>
    <div>
        <label for="mail"><?php echo $formulaire['4']?>&nbsp;</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="objet"><?php echo $formulaire['5']?></label>
        <input type="text" id="objet" name="message_objet">
    </div>
    <div class="contentm">
        <label for="content" id="contentm"><?php echo $formulaire['6']?></label>
        <input type="text" id="contentm" name="message_content">
    </div>
    <buton type="submit" class="button-two"><?php echo $formulaire['7']?></button>
    </form>
</div>
</div>