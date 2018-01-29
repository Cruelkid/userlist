<?php

namespace app\controllers;

use app\models\User;

class ListController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

}
