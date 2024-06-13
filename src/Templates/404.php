<?php 
    $this->layout('template', ['title' => 'VPC | VoIP платформа Центавр - 404']); 
?>

<?php $this->insert('header', ['style' => 'background-position: center; background: linear-gradient(180deg,#0e223a 11.98%,rgba(22,73,131,.38) 51.04%,#0e223a 92.19%),url(../img/header/404.jpg)', 'block' => 'header_block3', 'link_main_page' => 'href=/'] ) ?>

<main>

        <section class="feedback none1" id="section2">
            <div class="container">
                <div class="feedback__title">
                    <h2 class="title-2">Есть вопросы?</h2>
                </div>
                <p class="form__privacy form__privacy--bottom">
                    *Мы никому не передаем ваши данные. <br>И не сохраняем ваш номер в базу.
                </p>
                <br>
                <form class="form" method=""POST action="">
                    <div class="feedback__form">
                            <input data-namefield-input type="text" id="namefield" name="namefield" class="form__input" placeholder="Ваше имя" autocomplete="off"  aria-required="true" required>
                            <input data-tel-input class="form__input" id="email" name="email" type="text" class="form__input" placeholder="Ваш телефон" autocomplete="off"  aria-required="true" required>
                            <input data-email-input type="email" id="phone" name="phone" class="form__input" placeholder="E-mail" autocomplete="off"  aria-required="true" required>
                    </div>
                    <div class="feedback__form2">
                            <textarea data-question-input class="form__input form__area"  id="question" name="question" placeholder="Ваш вопрос" autocomplete="off"  aria-required="true" required></textarea>
                            <button type="submit" class="form__btn">Отправить</button>
                    </div>
                </form>
            </div>
        </section>

</main>


<?php $this->insert('footer') ?>   