<?php wp_footer(); ?>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/" class="main__logo"><img src="<?php bloginfo('template_url'); ?>/image/logo.png"></a>
            </div>
            <div class="col-md-4">
                <p class="footer__copyright">
                    © 2013 - 2019 / ООО «ИВЕНТ ЦЕНТР».
                </p>
                <p class="footer_police">
                    Политика конфиденциальности
                </p>
            </div>
            <div class="col-md-4">
                <p class="footer__mail">
                    info@btrnb.ru
                </p>
                <p class="footer_tel">
                    <span class="lptracker_phone">+7(499) 501-77-04</span>
                </p>
                <a href="#header" class="footer__up d-flex" >
                    Наверх
                </a>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;">
    <div class="police box-modal">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="police__text d-flex flex-column">
                        <img src="<?php bloginfo('template_url'); ?>/image/close.png" alt="" class="box-modal_close arcticmodal-close ml-auto">
                        <p>
                            Политика конфиденциальности
                        </p>
                        <p>
                            Настоящим в соответствии с Федеральным законом № 152-ФЗ «О персональных данных» от 27.07.2006 года Вы подтверждаете свое согласие на обработку компанией ООО "ИВЕНТ ЦЕНТР М" персональных данных: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу исключительно в целях продажи программного обеспечения на Ваше имя, как это описано ниже, блокирование, обезличивание, уничтожение.
                        </p>
                        <p>
                            Компания ООО "ИВЕНТ ЦЕНТР М" гарантирует конфиденциальность получаемой информации. Обработка персональных данных осуществляется в целях эффективного исполнения заказов, договоров и иных обязательств, принятых компанией ООО "ИВЕНТ ЦЕНТР М" в качестве обязательных к исполнению.
                        </p>
                        <p>
                            В случае необходимости предоставления Ваших персональных данных правообладателю, дистрибьютору или реселлеру программного обеспечения в целях регистрации программного обеспечения на ваше имя, вы даёте согласие на передачу ваших персональных данных. Компания ООО "ИВЕНТ ЦЕНТР М" гарантирует, что правообладатель, дистрибьютор или реселлер программного обеспечения осуществляет защиту персональных данных на условиях, аналогичных изложенным в Политике конфиденциальности персональных данных.
                        </p>
                        <p>
                            Настоящее согласие распространяется на следующие Ваши персональные данные: фамилия, имя и отчество, адрес электронной почты, почтовый адрес доставки заказов, контактный телефон, платёжные реквизиты.
                        </p>
                        <p>
                            Срок действия согласия является неограниченным. Вы можете в любой момент отозвать настоящее согласие, направив письменное уведомления на адрес: 101000, г. Москва, ул. Мясницкая, д. 30/1/2, стр. 2, оф. 4 с пометкой «Отзыв согласия на обработку персональных данных».
                        </p>
                        <p>
                            Обращаем ваше внимание, что отзыв согласия на обработку персональных данных влечёт за собой удаление Вашей учётной записи с Интернет-сайта (http://www.eventcentrum.ru), а также уничтожение записей, содержащих ваши персональные данные, в системах обработки персональных данных компании ООО "ИВЕНТ ЦЕНТР М", что может сделать невозможным пользование интернет-сервисами компании ООО "ИВЕНТ ЦЕНТР М".
                        </p>
                        <p>
                            Гарантирую, что представленная мной информация является полной, точной и достоверной, а также что при представлении информации не нарушаются действующее законодательство Российской Федерации, законные права и интересы третьих лиц. Вся представленная информация заполнена мною в отношении себя лично.
                        </p>
                        <p>
                            Настоящее согласие действует в течение всего периода хранения персональных данных, если иное не предусмотрено законодательством Российской Федерации.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display: none;">
    <form action="<?php bloginfo('template_directory') ?>/success.php" method="POST" class="form-tel box-modal js-form" id="form-tel">
        <div class="form-tel__text d-flex flex-column">
            <p class="form-tel__text-p">Заказать звонок</p>
<!-- --><?php //echo do_shortcode( '[contact-form-7 id="5" title="Заказать звонок"]' ); ?>
	        <input type="text" name="name" placeholder="Имя">
	        <input type="tel" name="phone" placeholder="Телефон">
	        <a href="" class="btn btn__header btn__form" onclick="gtag('event', 'clickbutton', { 'event_category': 'button', 'event_action': 'otprav', }); ym(53876053, 'reachGoal', 'otpravit'); return true;" value="отправить">Отправить</a>
        </div>
        <div class="form__overlay">
            <p class="d-flex align-items-center">
                Заявка принята, в ближайшее время с Вами свяжется наш специалист!
            </p>
        </div>
    </form>
</div>
<div style="display: none;">
    <form action="<?php bloginfo('template_directory') ?>/success.php" method="POST" class="form-consultation box-modal js-form" id="form-consultation">
        <div class="form-tel__text d-flex flex-column">
            <p class="form-tel__text-p">Получите бесплатную консультацию<br>по организации лучшего тимбилдинга</p>
<!--            <?php //echo do_shortcode( '[contact-form-7 id="45" title="Получите бесплатную консультацию"]' ); ?>-->
	        <input type="text" name="name2" placeholder="Имя">
	        <input type="email" name="email" placeholder="E-mail">
	        <input type="tel" name="phone2" placeholder="Телефон">
	         <a href="" class="btn btn__header btn__form" onclick="gtag('event', 'clickbutton', { 'event_category': 'button', 'event_action': 'otprav', }); ym(53876053, 'reachGoal', 'otpravit'); return true;" value="отправить">Отправить</a>
        </div>
        <div class="form__overlay">
            <p class="d-flex align-items-center">
                Заявка принята, в ближайшее время с Вами свяжется наш специалист!
            </p>
        </div>
    </form>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.min.js"></script>
<!-- Валидатор для проверки формы на заполненность  -->
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.arcticmodal-0.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<!-- Leadball code -->
<script type="text/javascript">(function(){var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
s.src = "https://leadball.ru/whats/float.php?id=SP8BLWw3apNeVTZcMKx5";
var wSP8BLW = document.getElementsByTagName("script")[0];
wSP8BLW.parentNode.insertBefore(s, wSP8BLW);})();</script>
<!-- Leadball code end -->
</body>
</html>
