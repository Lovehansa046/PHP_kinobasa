<?php

require_once ('controllers/Controller.php');

class VIEW_page {
    public function ViewMainPage () {
        $controller = new CController();
        $arrayResult = $controller->SetMainPage();
        include 'views/main.php';
        Return $arrayResult;
    }

    public function GetHeader() {
        return 'views/header.php';
    }

    public function  GetFooter () {
        return 'views/footer.php';
    }
}