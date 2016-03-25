<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>myMorning☀︎</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="./js/fadein.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
  			include "./include/common/header.php";
	 		?>
        <div id="for-girl">
        <div class="layerTransparent">
            <div class="head-block">
                <div class="container">
                    <div class="brand-logo sp-brand-logo" id="mym">myMorning<span id="sun">☀</span>︎</div>
                    <div class="brand-message">
                        <i><p>「よし、朝だ！」というのも、「あーあ、朝か...」というのも、あなたの考え方次第だ。ー　ウェイン・ダイアー</p></i>
                    </div>
                </div>
            </div>
        <div class="page-body">
            <div class="container">
                <ul class="active"></ul>
            </div>
            <div class="container">
                <div class="content-wrap">
                    <ul class="content-list">
                        <li><a href=""><div class="btn">ABOUT</div></a><li>
                        <li><a href=""><div class="btn">LOGIN</div></a><li>
                        <li><a href="#entry"><div class="btnR"><b>新規登録 ▼</b></div></a><li>
                        <li><a href=""><div class="btn">TOPICS</div></a><li>
                    </ul>
                </div>
            </div>
        </div>
        </div><!-- /.layerTransparent -->
    </div><!-- /.for-girl -->
    <div class="discriptions">
        <div class="container">
        <h1>あなたの朝を最高のものに。<span class="Emessage">Enjoy myMorning ☀︎</span></h1>
            <section id="entry" id="entry-top">
                <h2 class="top__copy">朝やりたいことすべて、カレンダーに組み込むことができる<br>
                <span class="aws">最高の情報管理アプリ</span></h2>
                <form accept-charset="UTF-8">
                    <p style="float: left; color: #777;">メールアドレス</p>
                    <input placeholder="" type="email" id="mail" class="entry-form__input"/>
                    <input type="button" class="entry-form__btn" onclick="add_member()" value="登録してはじめる"></button>
                </form>
            </section>
        </div>
    </div><!-- /.discriptions -->
    </div><!--/ wrapper -->
    <?php
  			include "./include/common/footer.php";
	 		?>
    <script type="text/javascript" src="js/saida.js"></script>
    <script type="text/javascript" src="js/snow.js"></script>
    <script type="text/javascript" src="js/sakura.js"></script>
</body>
</html>