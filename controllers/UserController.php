<?php

namespace app\controllers;

use app\models\UserForm;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        $model = new UserForm();
        if ($model->load(\Yii::$app->request->post())) {
            var_dump($model);
        }
        return $this->render("index", [
            "model" => $model
        ]);
    }
}