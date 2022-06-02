<?php /* Template Name: Страница Маркетинг */
get_header();
?>
<div class="main main--marketing">
    <div class="container-bordering">
        <div class="main-header">Наше главное правило: </div>
        <div class="main-subheader">У нас нет никаких правил!</div>
        <div class="main-caption"> Ниже мы собрали рекомендации и шаблоны призванные облегчить работу. <br>Но вы
            всегда можете предложить свое видение.<br><span class="main-caption--blue">У нас это не только не
                воспрещается, но и поощряется!</span></div>
        <div class="refferals-section">
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/example1.png'?>" alt=""></div>
                <div class="refferals-section__header">Брендбук </div><a class="refferals-section__link"
                    href="#">подробнее</a>
            </div>
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/example2.png'?>" alt=""></div>
                <div class="refferals-section__header">Фотобанк</div><a class="refferals-section__link"
                    href="#">подробнее</a>
            </div>
            <div class="refferals-section__card">
                <div class="refferals-section__img"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/example3.png'?>" alt=""></div>
                <div class="refferals-section__header">Рекламные материалы</div><a class="refferals-section__link"
                    href="#">подробнее</a>
            </div>
            <div class="refferals-section__img1"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/decor4.svg'?>" alt=""></div>
            <div class="refferals-section__img2"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/decor3.svg'?>" alt=""></div>
        </div>
    </div>
    <div class="promote-section">
        <div class="container-bordering">
            <div class="promote-section__header">Пригласите нас в качестве спикера!</div>
            <div class="promote-section__text"> По вопросам согласования рекламных материалов, разрешений на
                использование ТЗ или любых других вопросов маркетинга <br><a class="promote-section__link"
                    href="mailto:anna@sputnik.systems"> anna@sputnik.systems</a></div>
            <div class="promote-section__img"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/decor5.png'?>" alt=""></div>
            <div class="promote-section__globe"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/globe.svg'?>" alt=""></div>
        </div>
    </div>
</div>
<?php get_footer();