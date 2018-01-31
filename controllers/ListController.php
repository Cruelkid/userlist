<?php

namespace app\controllers;

//use Yii;
use app\models\Address;
use app\models\User;
//use yii\db\Expression;
use yii\web\NotFoundHttpException;

class ListController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionDisplayuser($id) {
        $user = User::findOne(['id' => $id]);

        if (!$user) throw new NotFoundHttpException('User not found.');

        $addresses = Address::findAll(['user_id' => $id]);

        return $this->render('displayuser', [
            'user' => $user,
            'addresses' => $addresses
        ]);
    }

    public function actionCreateuser() {
//        if (Yii::$app->user->isGuest) {
//            $user = new User();
        $address = new Address();
            var_dump($address);
            die;
            $user->load(Yii::$app->request->post());
//            $user->created_at = new Expression('NOW()');
            $user->save();
        }
//    }

}
