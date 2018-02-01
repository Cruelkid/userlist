<?php

namespace app\controllers;

use Yii;
use app\models\Address;
use app\models\User;
use yii\db\Expression;
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
        $user = new User();
        $user->load(Yii::$app->request->post());
        $user->created_at = new Expression('NOW()');
        if ($user->save()) {
            Yii::$app->session->set('user_id', $user->id);
            return $this->redirect(['addaddress', ]);
        }

        return $this->render('createuser', [
            'userForm' => $user,
        ]);

    }

    public function actionAddaddress() {
        $address = new Address();
        $address_uid = Yii::$app->session->get('user_id');

        if ($address->save()) {
            Yii::$app->session->remove('user_id');
            return $this->redirect(['/',]);
        }

        return $this->render('addaddress', [
            'addressForm' => $address,
            'user_id' => $address_uid
        ]);
    }

}
