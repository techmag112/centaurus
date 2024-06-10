<?php 
    $this->layout('template', ['title' => 'VPC | VoIP платформа Центавр - рограммное решение, включающая в себя центр
    обработки вызовов со стандартными функционалом телефонной станции, системы записи аудио и видео переговоров и конференций.']); 
?>

<?php $this->insert('header') ?>

<main>
        <section class="benefits none1" id="section1">
           
            <h2 class="visually-hidden">Преимущества</h2>

            <div class="container container--sm">
                <div class="benefits__row">

                    <div class="benefits__item" data-aos="flip-left">
                        <img src="./img/benefits/reestr.svg" alt="" class="benefits__item-img1">
                        <p class="benefits__item-text">Зарегестрированное российское ПО</p>
                    </div>

                    <div class="benefits__item" data-aos="flip-left">
                        <img src="./img/benefits/astra.svg" alt="" class="benefits__item-img2">
                        <p class="benefits__item-text">На базе российской ОС</p>
                    </div>

                    <div class="benefits__item" data-aos="flip-left">
                        <img src="./img/benefits/postgre.svg" alt="" class="benefits__item-img3">
                        <p class="benefits__item-text">На базе российской СУБД</p>
                    </div>

                </div>
            </div>
           
        </section>

        <section class="advantages">
            <div  data-aos="fade-up">
            <div class="advantages__title">
                <h2 class="title-2">Преимущества</h2>
            </div>
            <div class="block_cards">
                <div class="container_cards">

                        <input type="radio" name="slide" id="c1" checked>
                            <label for="c1" class="card">
                                <div class="row">
                                    <div class="icon">1</div>
                                    <div class="description">
                                        <h4>Сделано в России</h4>
                                        <p>Программное обеспечение внесено в Единый реестр российских программ для электронных вычислительных машин и баз данных</p>
                                    </div>
                                </div>
                            </label>

                            <input type="radio" name="slide" id="c2" >
                            <label for="c2" class="card">
                                <div class="row">
                                    <div class="icon">2</div>
                                    <div class="description">
                                        <h4>Мульти-регистрация</h4>
                                        <p>Поддержка множественной sip-регистрации в кластеризации разными sip-терминалами с одинаковыми аккаунтами, так же и двойной регистрацией sip-аппаратов в (гео)кластеризации которые поддерживают такой функционал</p>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="slide" id="c3" >
                            <label for="c3" class="card">
                                <div class="row">
                                    <div class="icon">3</div>
                                    <div class="description">
                                        <h4>Кластер/Гео-кластер</h4>
                                        <p>Горизонтальное масштабирование<br>Географически распределённая коммутационная архитектура горизонтального масштабирования</p>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="slide" id="c4" >
                            <label for="c4" class="card">
                                <div class="row">
                                    <div class="icon">4</div>
                                    <div class="description">
                                        <h4>Мульти-арендность</h4>
                                        <p>Единый экземпляр программного приложения обслуживает множество организаций-клиентов («арендаторов») с независимыми конфигурациями настроек.</p>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="slide" id="c5" >
                            <label for="c5" class="card">
                                <div class="row">
                                    <div class="icon">5</div>
                                    <div class="description">
                                        <h4>Центр обработки звонков</h4>
                                        <p>Работает во всех вариантах установки независимо от того где регистрирован агент в (гео)кластеризации VoIP-Платформы</p>
                                    </div>
                                </div>
                            </label>
                            <input type="radio" name="slide" id="c6" >
                            <label for="c6" class="card">
                                <div class="row">
                                    <div class="icon">6</div>
                                    <div class="description">
                                        <h4>Личный кабинет</h4>
                                        <p>Разграничение доступа личного кабинета в Мульти-арендность <br>по методу IP-адресации как внутри корпоративной сети так <br>и в публичной сети</p>
                                    </div>
                                </div>
                            </label>

              
                </div>
            </div>
        </div>
        </section>

        <section class="cta none1">
            <div class="container tabs" data-aos="fade-up">
               <div class="variant__title">
                    <h2 class="title-2">Варианты установки</h2>
                </div>

                <div class="warpper">
                    <input class="radio" id="one" name="group" type="radio" checked>
                    <input class="radio" id="two" name="group" type="radio">
                    <input class="radio" id="three" name="group" type="radio">
                    <div class="tabs">
                    <label class="tab" id="one-tab" for="one">Стандартная</label>
                    <label class="tab" id="two-tab" for="two">Кластерная</label>
                    <label class="tab" id="three-tab" for="three">Гео-кластерная</label>
                      </div>
                    <div class="panels">
                    <div class="panel" id="one-panel">
                      <div class="panel-title">Установка производится
                        на одном выделенном сервере</div><br><br>
                      <p>* при отсутствии требований к кластеризации</p>
                    </div>
                    <div class="panel" id="two-panel">
                      <div class="panel-title">Установка производится на трех выделенных физических
                        серверах с предустановленной средой виртуализации Astra Linux</div><br><br>
                      <p>* Минимальное количество выделенных физических серверов 3 для одного дата-центр</p>
                    </div>
                    <div class="panel" id="three-panel">
                      <div class="panel-title">Установка производится в каждом дата-центре по три* выделенных
                        физических сервера с предустановленной средой виртуализации Astra Linux</div><br><br>
                      <p>* Минимальное количество выделенных физических серверов 3 для одного дата-центр</p>
                    </div>
                    </div>
                </div>


            </div>
        </section>

        <!--  <section class="video none1">
            <h2 class="visually-hidden">Видео про Центавр</h2>
            <div class="container">

                <a href="https://www.youtube.com/watch?v=bhJNL9JUsnY" data-youtubeLightbox class="video__link">
                    <img src="./img/video/play.svg" alt="" class="video__icon">
                    <img src="./img/video/video-img.jpg" alt="" class="video__img">
                </a>
            </div>
        </section>  --> 

        <section class="section-map none1" id="section3">
            <div class="container">
                <div class="section-map__title">
                    <h2 class="title-2">Район на карте</h2>
                </div>
                <div class="section-map__map">
                    <div class="map" id="map"></div>
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
                <form class="form" method=""POST action="">
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

        <!-- YouTube LightBox -->
        <!--  <div id="youtubelightbox" class="youtubelightbox">
                <div class="youtubelightbox__centeredchild">
                <div class="youtubelightbox__videowrapper">
                        <div id="youtubelightboxPlayer"></div>
                </div>
                </div>
        </div> -->

<?php $this->insert('footer') ?>                            
            

  