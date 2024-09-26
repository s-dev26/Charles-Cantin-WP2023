<?php
/* Template Name: Modèle page tarifs */
?>

<?php get_header() ?>

<div class="containers">
    <div class="slide">
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/bebe.jpg);">
            <div class="content">
                <div class="name">Mon bébé 100 euros</div>
                <div class="des">Photo d’enfant jusqu’à 3 ans (photo à domicile)</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/Famille.jpg);">
            <div class="content">
                <div class="name">Famille 220 euros</div>
                <div class="des">Pour la famille ou les amis jusqu’à 4 personnes, en extérieur ou en studio
                    30 euros en supplément par personne au-delà de 4 (hormis enfant jusqu’à 2 ans)</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/Grossesse.jpg);">
            <div class="content">
                <div class="name">Il était une fois 160 euros</div>
                <div class="des">Photo de grossesse (À votre domicile, en extérieur ou en studio)</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/Shooting1.jpg);">
            <div class="content">
                <div class="name">Juste moi 130 euros</div>
                <div class="des">Séance pour une personne, en extérieur ou en studio</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/Shooting2.jpg);">
            <div class="content">
                <div class="name">Pour deux 195 euros</div>
                <div class="des">Pour deux personnes, en extérieur ou en studio</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
        <div class="item" style="background-image: url(/wp-content/uploads/2023/12/wedding.jpg);">
            <div class="content">
                <div class="name">J’immortalise l’événement sur mesure</div>
                <div class="des">Prestation de mariage ou baptême sur devis</div>
                <button onclick="window.location.href = 'contact.html';">Contactez-moi</button>
            </div>
        </div>
    </div>
    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
</div>

<?php get_footer() ?>