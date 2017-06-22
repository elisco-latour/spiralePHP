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
            <section class="spirale-section">
                <div class="spirale-contact_section">
                    <div class="spirale-contact_form-container">
                        <form class="spirale-contact_form">
                            <label for="nom_contact">Votre nom</label>
                            <input type="text" name="nom_contact">
                            <label for="nom_contact">Votre prénom</label>
                            <input type="text" name="prenom_contact"/>
                            <label for="nom_contact">Votre adresse email</label>
                            <input type="email" name="email_contact">
                            <label for="nom_contact">Votre message</label>
                            <textarea name="email-content">
                                
                            </textarea>
                        </form>
                    </div>
                    <div class="spirale-contact_information">
                        <div class="info-box">
                            <p class="spirale-address"></p>
                            <p class="spirale-phone"></p>
                            <p class="spirale-email"></p>
                        </div>
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
