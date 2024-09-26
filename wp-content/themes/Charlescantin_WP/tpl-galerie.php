<?php
/* Template Name: Modèle page galerie */
?>

<?php get_header() ?>

<main>
    <div class="wrapper">
        <main class="page">
            <section class="galerie">

                <div class="articles__filter filter-articles">
                    <button data-filter="*" type="button" class="filter-articles__item active">Tout</button>
                    <button data-filter="wedding" type="button" class="filter-articles__item">Mariage</button>
                    <button data-filter="grossesse" type="button" class="filter-articles__item">Grossesse</button>
                    <button data-filter="baby" type="button" class="filter-articles__item">Bébé</button>
                    <button data-filter="family" type="button" class="filter-articles__item">Famille</button>
                    <button data-filter="bapteme" type="button" class="filter-articles__item">Bapteme</button>
                    <button data-filter="couple" type="button" class="filter-articles__item">Couple</button>
                    <button data-filter="portrait" type="button" class="filter-articles__item">Portrait</button>
                </div>

                <div class="articles__items">

                    <article data-filter="wedding" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/wedding-1836315_1280.jpg" alt="Image">
                        </a>

                    </article>

                    <article data-filter="grossesse" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/alphabet-blocks-1835658_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="baby" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/baby-20339_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="family" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/Famille.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="bapteme" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/baptism-1885303_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="couple" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/couple-1850073_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="bapteme" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/baptism-547222_1280.jpg" alt="Image">
                        </a>
                    </article>


                    <article data-filter="grossesse" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/autumn-1850044_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="couple" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/couple-1869206_1280.jpg" alt="Image">
                        </a>
                    </article>


                    <article data-filter="couple" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/couple-437968_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="baby" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/baby-21998_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="baby" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/baby-784608_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="wedding" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/bride-1837148_1280.jpg" alt="Image">
                        </a>
                    </article>

                    <article data-filter="bapteme" class="articles__item article">
                        <a href="#" class="article__image">
                            <img src="/wp-content/uploads/2023/12/dahlia-2677514_1280.jpg" alt="Image">
                        </a>
                    </article>
                </div>
    </div>
    </section>


</main>
</div>


<?php get_footer() ?>