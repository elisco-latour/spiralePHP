<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         *  include the header
         */
        require_once 'header.php';
        ?>
        <main>
            <section class="spirale-section spirale-contact_form-section">
                <div class="spirale-contact__wrapper">

                    <div class="spirale-contact_information spirale-col--6 spirale-shadow--2dp">
                        <div class="info-box">
                            <p class="spirale-address">Benin / Cotonou, AGOTIKON nouvelle pharmacie</p>
                            <p class="spirale-phone">+299 xx xx xx xx / +229 xx xx xx xx</p>
                            <p class="spirale-email">contact@spirale.com</p>
                        </div>
                    </div>

                    <div class="spirale-contact_form-container spirale-col--6">
                        <form action="envoi_mail.php" method="POST"  class="spirale-contact_form">
                            <label for="nom_contact">Votre nom complet</label>
                            <input type="text" name="nom_contact">
                            <label for="nom_contact">Votre sujet</label>
                            <input type="text" name="prenom_contact"/>
                            <label for="nom_contact">Votre adresse email</label>
                            <input type="email" name="email_contact">
                            <label for="nom_contact">Votre message</label>
                            <textarea name="message_contact"></textarea>
                            <input class="contact-link" type="submit" value="Envoyer"/>
                        </form>
                    </div>

                </div>
            </section>
        </main>
        <?php
        /**
         * Include the footer
         */
        require_once 'footer.php';
        ?>
    </body>
</html>
