<?php  include 'views/templates/header.php';?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3">
                <form role="search" class="visible-xs">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="search" placeholder="ваш запрос" class="form-control input-lg">
                            <div class="input-group-btn">
                                <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

                <h2>новые фильмы</h2>
                <hr>
                <div class="row">
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/Inter.php"><img src="/KinoBaza_PHP/assets/img/inter.png" alt="интерстеллар"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">интестеллар</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/matrix.php"><img src="/KinoBaza_PHP/assets/img/matrix.png" alt="матрица"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">матрица</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/atlas.php"><img src="/KinoBaza_PHP/assets/img/cloud.png" alt="облачный атлас"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">облачный атлас</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/max.php"><img src="/KinoBaza_PHP/assets/img/max.png" alt="безумный макс"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">безумный макс</a></div>
                    </div>
                </div>
                <div class="margin-8"></div>
                <h2>новые сериалы</h2>
                <hr>
                <div class="row">
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/secret.php"><img src="/KinoBaza_PHP/assets/img/xfiles.png" alt="секретные материалы"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">секретные материалы</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/silicon.php"><img src="/KinoBaza_PHP/assets/img/silicon.png" alt="кремневая долина"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">кремневая долина</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/zombi.php"><img src="/KinoBaza_PHP/assets/img/dead.png" alt="ходячие мертвецы"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">ходячие мертвецы</a></div>
                    </div>
                    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <a href="/KinoBaza_PHP/views/risk.php"><img src="/KinoBaza_PHP/assets/img/breakingbad.png" alt="во все тяжкие"></a>
                        <div class="film_label"><a href="/KinoBaza_PHP/html/views.php">во все тяжкие</a></div>
                    </div>
                </div>
                <div class="margin-8"></div>
                <a href="/KinoBaza_PHP/html/Inter_show.php"><h3>Как снимали Интерстеллар<h3></a>
                <hr>
                <p>
                    45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режжисера, студия Warner Bros., которая выпускала последние фильмы, добилась участия в проекте
                </p>

                <a href="/KinoBaza_PHP/html/Inter_show.php" class="btn btn-warning pull-right">читать</a>

                <div class="margin-8"></div>
                <a href="/KinoBaza_PHP/html/Tom.php"><h3>Актер Том Хенкс поделился впечатлением о фестивале</h3></a>
                <hr>
                <p>
                    16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.
                </p>
                <a href="/KinoBaza_PHP/html/Tom.php" class="btn btn-warning pull-right">читать</a>
                <div class="margin-8 clear"></div>
            </div>
            <?php  include 'views/templates/other.php';?>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php  include 'views/templates/footer.php';?>
