<?php

namespace app\controllers;

use app\models\Address;
use app\models\User;
use yii\web\NotFoundHttpException;

class ListController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionUser($id) {
        $user = User::findOne(['id' => $id]);

        if (!$user) throw new NotFoundHttpException('User not found.');

        $addresses = Address::findAll(['user_id' => $id]);

        return $this->render('user', [
            'user' => $user,
            'addresses' => $addresses
        ]);
    }

}
