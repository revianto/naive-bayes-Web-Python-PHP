<?php
    include "header.php";
    include "menu.php";
    if(isset($_GET['page'])){
        $p = $_GET['page'];
        if($p == 'abstract'){
            include "data.php";
        }elseif ($p == 'tfidf') {
            include "tfidf.php";
        }elseif ($p == 'add') {
            include "input.php";
        }elseif ($p == 'dashboard') {
            include "dashboard.php";
        }else{
            include "404.php";
        }
    }else{
        include 'dashboard.php';
    }
    include "footer.php";
?>