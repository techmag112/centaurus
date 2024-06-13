<header class="header none1" style="<?=$this->e($style)?>" >

        <div class="header__top">
            <div class="container">
                <div class="header__top-row">
 
                    <a href="/">
                        <img src="./img/logo.svg" alt="Центавр">
                        <img src="./img/new_logo.svg" alt="Центавр">
                    </a>

                    <div class="header__nav">
                        <nav class="nav">
                            <ul class="nav__list">
                                <li><a <?=$this->e($link_main_page)?>>О продукте</a></li>
                                <li><a href="/doc">Документация</a></li>
                                <li><a data-scrollto="section2">Цены</a></li>
                                <!-- <li><a href="#!">Техподдержка</a></li> -->
                                <li><a data-scrollto="section2">Связаться с нами</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header__nav-btn">
                        <button class="nav-icon-btn">
                            <div class="nav-icon"></div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        
        <?php $this->insert("$block") ?>
                
</header>