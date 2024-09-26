<?php
/* Template Name: Modèle page contact */
?>

<?php get_header() ?>

<section class="contact">
    <form action="https://formspree.io/f/xknldnyk" method="POST">

        <div class="container">
            <div class="info_container">
                <div class="location info_item">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="information">
                        <h2>Adresse: 4 Pl. Armand Carrel 75019 Paris</h4>
                    </div>
                </div>

                <div class="email info_item">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="information">
                        <h3>Email: charlescantin@gmail.com</h4>
                            <p class="paragraphe-email"></p>
                    </div>
                </div>

                <div class="call info_item">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="information">
                        <h4>Telephone : 01.42.00.00.00</h4>
                    </div>
                </div>

                <div class="open_hours info_item">
                    <div class="icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="information">
                        <h5>Horaires d'ouverture : Lundi au Vendredi de 10h à 17h</h4>
                    </div>
                </div>

            </div>

            <div class="input_container">
                <form action="#">
                    <div class="row">
                        <input type="text" name="nom" id="" class="form_control" placeholder="Votre Nom" required>
                        <input type="email" name="email" id="" class="form_control" placeholder="Email" required>
                    </div>

                    <input type="text" name="objet" id="" placeholder="Objet" class="form_control" required>
                    <textarea name="message" id="" cols="30" rows="7" class="form_control" placeholder="Message" required></textarea>

                    <div class="btn"><button type="submit">Envoyer</button></div>
                </form>
            </div>
        </div>
</section>




<?php get_footer() ?>