<?php

namespace app\controllers;

use yii\web\Controller;

class BasicController extends Controller
{
    public $layout = "basic";

    public function actionIndex()
    {
        $this->view->title = "Главная";
        return $this->render("index");
    }

    public function actionFeatures()
    {
        $this->view->title = "Цели";
        return $this->render("features");
    }
}