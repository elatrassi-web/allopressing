
<?php
$destinataires = "m.elatrassi19@gmail.com";
$sujet = "Commande N°";
 
// en-têtes expéditeur
$entetes = "From : mohamedelatrassi77@gmail.com\n";
 
// en-têtes adresse de retour
$entetes .= "Reply-to : mohamedelatrassi77@gmail.com\n";
 

 
// priorité urgente

 
mail($destinataires, $sujet, "Le message\nligne2", $entetes);
?>