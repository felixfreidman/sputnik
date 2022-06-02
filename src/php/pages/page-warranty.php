<?php /* Template Name: Страница Гарантия */
get_header();
?>
<div class="main main--warranty">
    <div class="container-bordering">
        <div class="main-header">Гарантийный ремонт</div>
        <div class="selling-section">
            <div class="selling-section__row">
                <div class="selling-section__card">
                    <div class="selling-section__numbers">
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">12</div>
                            <div class="selling-section__caption">стран</div>
                        </div>
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">192</div>
                            <div class="selling-section__caption">города России </div>
                        </div>
                    </div>
                    <div class="selling-section__text">Наше оборудование используется в совершенно разных
                        климатических условиях. Мы <span class="selling-section__text--blue">гарантируем высокое
                            качество</span> при эксплуатации в соответствии с опубликованными рекомендациями.</div>
                </div>
                <div class="selling-section__card">
                    <div class="selling-section__numbers">
                        <div class="selling-section__number-container">
                            <div class="selling-section__number">1</div>
                            <div class="selling-section__caption">год</div>
                        </div>
                    </div>
                    <div class="selling-section__text selling-section__text--strange"><span
                            class="selling-section__text--blue">Срок гарантии</span><br> с момента первого выхода
                        оборудования в онлайн.</div>
                </div>
            </div>
            <div class="selling-section__more"> Подробный условия гарантии <a class="selling-section__link"
                    href="">здесь</a></div>
            <div class="selling-section__help">
                <div class="selling-section__par"> При возникновении гарантийного случая, необходимо самостоятельно
                    <span class="selling-section__par--blue">завести заявку в личном кабинете </span>Партнера, где в
                    дальнейшем можно отследить статус обращения.
                </div>
                <div class="selling-section__par">Подготовили <span class="selling-section__par--blue">подробную
                        инструкцию </span>для <a class="selling-section__link" href="">мобильного контроля</a> и <a
                        class="selling-section__link" href="">WEB версии</a>, а так же <a class="selling-section__link"
                        href="">видеообзор</a>.</div>
            </div>
        </div>
    </div>
    <div class="promote-section">
        <div class="container-bordering">
            <div class="promote-section__header">Негарантийный ремонт</div>
            <div class="promote-section__text"> Если оборудование не подходит под условия гарантийного ремонта, мы
                можем осуществить ремонт на возмездной основе. Такие запросы принимаются на почту <a
                    class="promote-section__link" href="mailto:service@sputnik.direct">service@sputnik.direct</a>
            </div>
            <div class="promote-section__img"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/decor3.svg'?>" alt=""></div>
            <div class="promote-section__globe"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/decor4.svg'?>" alt=""></div>
        </div>
    </div>
</div>
<?php get_footer();