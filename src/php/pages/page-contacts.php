<?php /* Template Name: Страница Контакты */
get_header();
?>
<div class="container-bordering">
    <div class="main main--contacts">
        <div class="main-header">Контакты</div><img class="circle1"
            src="<?=get_template_directory_uri() . '/assets/images/content/decor1.svg'?>" alt=""><img class="circle2"
            src="<?=get_template_directory_uri() . '/assets/images/content/decor2.svg'?>" alt=""><img class="decor1"
            src="<?=get_template_directory_uri() . '/assets/images/content/sosi 1.svg'?>" alt="">
        <div class="support-section">
            <div class="support-section__header">Служба поддержки</div>
            <div class="support-section__par"> Мы на официальной страже галактики Спутника <br><span
                    class="support-section__par--bold">с 8:00 до 22:00 по МСК ежедневно</span>, и в выходные, и в
                праздники. <br>Мы любим свою работу, поэтому вы получаете наши сообщения даже вне рабочего времени.
            </div>
            <div class="support-section__par"> <span class="support-section__par--bold">Написать нам</span> можно
                прямо из приложения. Если у вас нет такой возможности, то всегда можно обратиться с сайта через окно
                чата в правом нижнем углу или написать на почту <a class="support-section__par--link"
                    href="mailto:helpme@sputnik.systems">helpme@sputnik.systems</a>.</div>
        </div>
        <div class="questions-section">
            <div class="questions-section__card">
                <div class="questions-section__header"> Приобрести оборудование<br>или задать вопрос про услуги
                </div>
                <div class="questions-section__link"><a href="tel:88005115232">8-800-511-52-32</a></div>
                <div class="questions-section__link"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/tg-logo.svg'?>" alt=""><a
                        href="#">sputnik_sales_bot</a></div>
                <div class="questions-section__link"> <a href="mailto:sales@sputnik.systems">sales@sputnik.systems
                    </a></div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"> Обратиться насчет гарантии<br>на имеющееся оборудование
                </div>
                <div class="questions-section__link"><a href="mailto:service@sputnik.direct">service@sputnik.direct
                    </a></div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"> Для СМИ и PR-служб,<br>а также по вопросам маркетинга</div>
                <div class="questions-section__subheader"> Даём комментарии и пишем статьи. <br>Пригласите нас в
                    качестве спикера</div>
                <div class="questions-section__link"><a href="mailto:anna@sputnik.systems">anna@sputnik.systems </a>
                </div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header">Для соискателей</div>
                <div class="questions-section__subheader"> Мы всегда ищем амбициозных<br>и сильных профессионалов.
                    <br>Присылайте резюме
                </div>
                <div class="questions-section__link"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/tg-logo.svg'?>" alt=""><a
                        href="#">lilia_afanaseva</a></div>
            </div>
        </div>
        <div class="info-section">
            <div class="info-section__header">Реквизиты</div>
            <div class="info-section__subheader">Общество с ограниченной ответственностью «Спутник»</div>
            <div class="info-section__subheader">Юридический адрес:</div>
            <div class="info-section__text">121205, г .Москва, тер. Инновационного центра Сколково, ул. Нобеля, д.
                7, эт/ч.пом 3/51</div>
            <div class="info-section__subheader">Почтовый адрес:</div>
            <div class="info-section__text">421001, Республика Татарстан, г. Казань, а/я 46</div>
            <div class="info-section__row">
                <div class="info-section__subheader">Электронная почта:</div>
                <div class="info-section__text">sales@sputnik.systems </div>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">ИНН:</div>
                <div class="info-section__text">7731323200</div>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">КПП: </div>
                <div class="info-section__text">773101001</div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();