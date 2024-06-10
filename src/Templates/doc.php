<?php 
    $this->layout('template', ['title' => 'VPC | VoIP платформа Центавр - Документация.']); 
?>

<?php $this->insert('header2') ?>

<main>
        <section class="benefits none1" id="section1">
           
            <div class="feedback__title" style="text-align: center;">
                <h2 class="title-2">Руководства,<br>требования и условия</h2>
            </div>

            <div class="container container--sm">

                    <div class="files line-bottom">
                        <div class="benefits__item text_down">
                            <img src="./img/pic/01.svg" alt="Руководство по работе с приложением">
                        </div>

                        <div class="benefits__item text_down">
                            <p class="benefits__item-text">Руководство по работе с приложением</p>
                        </div>

                        <div class="benefits__item text_down line-left">
                            <br><a href="#" class="info--upload">В процессе</a>
                        </div>
                    </div>

                    <div class="files line-bottom">
                        <div class="benefits__item text_down">
                            <img src="./img/pic/02.svg" alt="Руководство по установке">
                        </div>

                        <div class="benefits__item text_down">
                            <p class="benefits__item-text">Руководство по установке</p>
                        </div>

                        <div class="benefits__item text_down line-left">
                            <br><a href="#" class="info--upload">В процессе</a>
                        </div>
                    </div>

                    <div class="files line-bottom">
                        <div class="benefits__item text_down">
                            <img src="./img/pic/03.svg" alt="Требования к серверу">
                        </div>

                        <div class="benefits__item  text_down">
                            <p class="benefits__item-text">Требования к серверу</p>
                        </div>

                        <div class="benefits__item  text_down line-left">
                            <br><a href="#" class="info--upload">В процессе</a>
                        </div>
                    </div>

                    <div class="files line-bottom">
                        <div class="benefits__item text_down">
                            <img src="./img/pic/04.svg" alt="Лицензирование">
                        </div>

                        <div class="benefits__item  text_down">
                            <p class="benefits__item-text">Лицензирование</p>
                        </div>

                        <div class="benefits__item  text_down line-left">
                            <br><a href="#" class="info--upload">В процессе</a>
                        </div>
                    </div>

                    <div class="files">
                        <div class="benefits__item text_down">
                            <img src="./img/pic/04.svg" alt="Условия предоставления тех.поддержки">
                        </div>

                        <div class="benefits__item  text_down">
                            <p class="benefits__item-text">Условия предоставления
                                тех.поддержки</p>
                        </div>

                        <div class="benefits__item  text_down line-left">
                            <br><a href="#" class="info--upload">В процессе</a>
                        </div>
                    </div>

            </div>
           
        </section>

        <section class="feedback none1" id="section2">
            <div class="container">
                <div class="feedback__title">
                    <h2 class="title-2">Есть вопросы?</h2>
                </div>
                <p class="form__privacy form__privacy--bottom">
                    *Мы никому не передаем ваши данные. <br>И не сохраняем ваш номер в базу.
                </p>
                <br>
                <form class="form" method=""POST action="/">
                    <div class="feedback__form">
                        <input data-name-input type="text" id="name" name="name" class="form__input" placeholder="Ваше имя" autocomplete="off" required>
                        <input data-tel-input class="form__input" id="email" name="email" type="text" class="form__input" placeholder="Ваш телефон" autocomplete="off"  required>
                        <input data-email-input type="email" id="phone" name="phone" class="form__input" placeholder="E-mail" autocomplete="off"  required>
                </div>
                <div class="feedback__form2">
                        <textarea data-question-input class="form__input form__area"  id="question" name="question" placeholder="Ваш вопрос" autocomplete="off" required></textarea>
                        <button type="submit" class="form__btn">Отправить</button>
                    </div>
                </form>
            </div>
        </section>

</main>


<?php $this->insert('footer') ?>   