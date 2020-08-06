<?php

class FrontController
{
    public function actionIndex(){
        require_once ROOT . '/engine/views/front/index.php';
        return true;
    }
}