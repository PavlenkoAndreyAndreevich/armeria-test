<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="assets/style.css" rel="stylesheet">
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="assets/slicknav.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="top-block">
                <div class="logo">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <div class="logo-text">
                        <p>Тайное</p>
                        <p>Мировое</p>
                        <p>Правительство</p>
                    </div>
                </div>
                <div class="white-layer"></div>
                <div class="menu">
                    <ul id="menu">
                        <li>+1 666 666 66 66</li>
                        <li><a href="#" style="color:#74b65f">О власти рептилоидов</a></li>
                        <li><a href="#">Крах доллара</a></li>
                        <li><a href="#">Теории заговора</a></li>
                    </ul>
                </div>


            </div>

        </header>

        <div class="form-section">
            <div class="form-container">
                <h1>Подписаться на ежемесячные взносы на строительство секретной базы в антарктиде</h1>
                <form action="calc.php" method="post">

                    <div class="input-group">
                        <div class="input_col"><label for="datepicker">Дата вклада</label><input type="text" name="date" id="datepicker"></div>
                        <div class="input_col"><label for="term">Срок подписки</label>
                            <select size="0" name="years">
                                <option selected value="12">1 год</option>
                                <option value="24">2 года</option>
                                <option value="36">3 года</option>
                                <option value="48">4 года</option>
                                <option value="60">5 лет</option></select>
                        </div>
                        <div class="input_col"><span style="font-size: 18px;">Автоматическое продление</span><div class="radio_buttons"><input type="radio" name="radio-button" value="yes" id="Yes"><label for="Yes">Да</label><input type="radio" name="radio-button" value="no" id="No"><label for="No">Нет</label></div></div>
                    </div>

                    <div class="input-group">
                        <div class="input_col"><label for="amount">Сумма вклада</label><br><input type="text" name="summn1" id="amount"></div>
                        <div class="input_col-range"><div class="slider-range-min"></div></div>
                    </div>

                    <div class="input-group">
                        <div class="input_col"><span style="font-size: 18px;">Пополнение вклада</span><div class="radio_buttons"><input type="radio" name="radio_button_2" value="yes" id="Yes-2"><label for="Yes-2">Да</label><input type="radio" name="radio_button_2" value="no" id="No-2"><label for="No-2">Нет</label></div></div>
                    </div>

                    <div class="input-group">
                        <div class="input_col"><label for="amount_2">Сумма в месяц</label><br><input type="text" name="summ_add" id="amount_2"></div>
                        <div class="input_col-range"><div id="slider-range-min"></div></div>
                    </div>

                    <div class="input-group form-bottom">
                        <div class="input_col "><p>Мой вклад в деятельность тайного<br>мирового правительства составит:</p></div>
                        <div class="contribution"><span>12 000  </span>&nbsp;р</div>
                    </div>
                    <input type="submit" class="button" value="Подписаться">
                </form>
            </div>

        </div>
        <footer>
            <ul>
                <li><a href="">Об организации</a></li>
                <li><a href="">Клоны президентов</a></li>
                <li><a href="">Политика конфиденциальности</a></li>
            </ul>
            <p>Сделано анонимно</p>
        </footer>


    </div>

    <script src="assets/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script src="assets/scripts.js"></script>
    <script src="assets/jquery.slicknav.js"></script>
    <script>
        $(function(){
            $('#menu').slicknav();
        });
    </script>
</body>
</html>
