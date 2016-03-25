<!--
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Using Ajax with PHP/MySQL
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using Ajax with PHP/MySQL</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/BeWebDeveloper.png" />
        </div><!-- header -->
        <h1 class="main_title">Using Ajax with PHP/MySQL</h1>
        <div class="content">
            <fieldset class="field_container">
                <legend> <img src="images/plus.gif"> Add new member </legend>
                <form>
                    <input type="text" id="name" class="frm_input" placeholder="name">
                    <input type="text" id="mail" class="frm_input" placeholder="mail">
                    <input type="text" id="pass" class="frm_input" placeholder="pass">
                    <input type="button" class="frm_button" value="Add" onclick="add_member()">
                </form>
            </fieldset>
            <fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Members list </legend>
                <div id="list_container">
                    <?php 
                        // including the config file
                        include('config.php');
                        $pdo = connect();
                        // list_members : this file displays the list of members in a table view
                        include('list_members.php'); 
                    ?>
                </div><!-- list_container -->
            </fieldset>
        </div><!-- content -->    
        <div class="footer">
            Powered by <a href="#">bewebdeveloper.com</a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
