<?php require_once('includes/connection.php')  ?>
<?php require_once('includes/header.php') ?>

<main class="main-block">
    <?php require_once('./includes/layouts/header.php') ?>
    <div class="content-main">
        <div class="pet">
            <div class="ellipse-main">
                <div class="ellipse-main-border"></div>
                <div class="ellipse-light"></div>
                <div class="ellipse-inner"></div>
                <div class="ellipse-right-light"></div>
                <div class="main-pets"></div>
            </div>
        </div>
    </div>
    <div class="main-text-container">
        <div class="main-text">
            <h1 class="text-xl text-900">Твой новый друг <br> с доставкой на дом</h1>
            <h4 class="text-m text-ls-s text-400">Онлайн магазин домашних животных <br> подарит тебе друга в
                несколько <br> кликов. Действуй! </h4>
            <input type="button" class="main-input-button" value="Посмотреть друзей ">
        </div>
    </div>
</main>
<section class="content-block-info">
    <div class="slider-menu">
        <input type="button" class="slider-nav left">
        <ul class="slider-active">
            <dt class="slider active one">
                <div class="inner-content-nav">
                    <div class="inner-text-nav">Собаки</div>
                    <div class="inner-nav"></div>
                </div>
            </dt>
            <dt class="slider active two">
                <div class="inner-content-nav">
                    <div class="inner-text-nav">Птицы</div>
                    <div class="inner-nav"></div>
                </div>
            </dt>
            <dt class="tree"></dt>
            <dt class="4 "></dt>
        </ul>

        <input type="button" class="slider-nav right">
        <div class="slider-indicators-container">
            <ol class="slider-indicators">
                <div class="helper-claider-indicators"></div>
                <dt data-slide-to="0" class="left active"></dt>
                <dt data-slide-to="1" class="right active"></dt>
                <dt data-slide-to="2" class="no-active"></dt>
                <dt data-slide-to="3" class="no-active"></dt>
                <dt data-slide-to="4" class="no-active"></dt>
            </ol>
        </div>
    </div>
    <div class="content-block-container-info">
        <h1 class="text-l text-900">Почему выбирают <br> наших друзей</h1>
        <div class="container-info-inner">
            <dt class="info-pet count">
                <div class="img-info-pet dogs"></div>
                <div class="info-pet-container-text">
                    <h2 class="text-md text-900">Их много <br></h2>
                    <h4 class="text-500">Огромный выбор животных <br> птиц и питомцев</h4>
                </div>
            </dt>
            <dt class="info-pet health">
                <div class="img-info-pet health"></div>
                <div class="info-pet-container-text">
                    <h2 class="text-md text-900">Они здоровы <br></h2>
                    <h4 class="text-500">Мы заботимся о каждом <br> питомце, который с нами</h4>
                </div>
            </dt>
            <dt class="info-pet love">
                <div class="img-info-pet love"></div>
                <div class="info-pet-container-text">
                    <h2 class="text-md text-900">Их любят <br></h2>
                    <h4 class="text-500">Мы окружаем любовью и <br> вниманием наших друзей</h4>
                </div>
            </dt>
        </div>
    </div>
</section>
<section class="catalog-animal">
    <div class="container-catalog-animal">
        <h1 class="text-l text-900">Каталог питомцев</h1>
        <nav class="sort-animal">
            <ol>
                <dt>
                    <input type="button" class="sort-button" value="Все">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Собаки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Кошки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Хомяки">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Рыбы">
                </dt>
                <dt>
                    <input type="button" class="sort-button" value="Птицы">
                </dt>
            </ol>
        </nav>
        <div class="list-animal-container">
            <input type="button" class="slider-nav left button-card-list-left">
            <input type="button" class="slider-nav right button-card-list-right">
            <div class="animal-card">
                <div class="items-catalog-container">
                    <div class="up-info-items-catalog">
                        <div class="age">
                            <h7>5</h7>
                        </div>
                        <div>месяцев</div>
                        <img src="public/img/ok.svg" alt="" class="img-up-card">
                    </div>
                    <img src="public/img/Cat-card.svg" alt="" class="animal-img-card">
                    <div class="animal-img-card-helper"></div>
                    <div class="down-info-items-catalog">
                        <h4>Шотладская кошка</h4>
                        <h6 class="text-500">Прекрасная подруга на дождливые, холодные времена</h6>
                        <h2 class="price">7200 р.</h2>
                        <img src="public/img/paw-img.svg" class="img-paw"></img>
                    </div>
                </div>
            </div>
            <div class="animal-card">
                <div class="items-catalog-container">
                    <div class="up-info-items-catalog">
                        <div class="age">
                            <h7>5</h7>
                        </div>
                        <div>года</div>
                        <img src="public/img/ok.svg" alt="" class="img-up-card">
                    </div>
                    <img src="public/img/Hamster-card.svg" alt="" class="animal-img-card">
                    <div class="animal-img-card-helper"></div>
                    <div class="down-info-items-catalog">
                        <h4>Хомяк</h4>
                        <h6 class="text-500">Маленький зверек сможет развеселить всю семью</h6>
                        <h2 class="price">1000 р.</h2>
                        <img src="public/img/paw-img.svg" class="img-paw"></img>
                    </div>
                </div>
            </div>
            <div class="animal-card">
                <div class="items-catalog-container">
                    <div class="up-info-items-catalog">
                        <div class="age">
                            <h7>5</h7>
                        </div>
                        <div>месяцев</div>
                        <img src="public/img/ok.svg" alt="" class="img-up-card">
                    </div>
                    <img src="public/img/Dog-card.svg" alt="" class="animal-img-card">
                    <div class="animal-img-card-helper"></div>
                    <div class="down-info-items-catalog">
                        <h4>Доберман</h4>
                        <h6 class="text-500">Отличный новый друг для всей семьи, охраняет и обожает</h6>
                        <h2 class="price">5900 р.</h2>
                        <img src="public/img/paw-img.svg" class="img-paw"></img>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-card-animal">
            <div class="nav-card"></div>
            <div class="active nav-card"></div>
            <div class="nav-card"></div>
            <div class="nav-card"></div>
            <div class="nav-card"></div>
            <div class="nav-card"></div>
        </div>
    </div>
</section>
<section class="we-love-to-play">
    <h1 class="we-love-to-play-text text-l text-900">Мы любим поиграть</h1>
    <div class="container-we-love-to-play-main">
        <div class="container-img-we-love-to-play">
            <img src="public/img/img1.svg" alt="" class="img-we-love-to-play">
            <img src="public/img/img2.svg" alt="" class="img-we-love-to-play">
        </div>
        <div class="container-img-we-love-to-play">
            <img src="public/img/img3.svg" alt="" class="img-we-love-to-play">
            <img src="public/img/img4.svg" alt="" class="img-we-love-to-play">
        </div>
        <div class="container-img-we-love-to-play">
            <img src="public/img/img5.svg" alt="" class="img-we-love-to-play">
            <img src="public/img/img6.svg" alt="" class="img-we-love-to-play">
        </div>
    </div>


</section>

<?php @require_once('includes/footer.php') ?>