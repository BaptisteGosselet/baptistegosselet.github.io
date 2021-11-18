<html>
    
    <head>
        <meta charset="utf-8">
        <title>Envoi du message</title>
    </head>

    <body>
        <?php
        
        $dest = 'baptiste.gosselet@outlook.fr'

        if(!empty($_POST['name']) && !empty($_POST['email'] && !empty($_POST['subject'] && !empty($_POST['message'])){
            $name = htmlspecialchars($_POST['name']);
            $email = 'From : ' + htmlspecialchars($_POST['email']);
            $subject = 'e-CV' + htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            if(filter_var($email,FILTER_VALIDATE_EMAIL)){ //l'email existe
                $retour = mail($dest,$subject,$message,$email);
                if($retour){
                    echo '<p>Votre message a bien été envoyé !</p>'
                }
            }
            else{
                echo "Email invalide.";
            }
        }
            
        ?>

    </body>

</html>

