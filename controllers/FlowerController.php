<?php

namespace app\controllers;

use yii\web\Controller;

class FlowerController extends Controller
{
    public $layout = "flower";

    public function actionIndex()
    {
        $this->view->title = "Теплицы на Кубани";
        return $this->render("index");
    }
}