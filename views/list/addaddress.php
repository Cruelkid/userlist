<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use app\models\Address;
use yii\helpers\Html;
$this->title = "Add address";
?>

<?php if(!empty($addressForm)): ?>
    <h1 class="text-center">Add address</h1>
    <?php $form = ActiveForm::begin(); ?>
        <?= $this->render("_addressForm", ['addressForm' => $addressForm, 'form' => $form, 'user_id' => $user_id]); ?>
        <input type="submit" name="post" value="Create">
    <?php ActiveForm::end(); ?>

<?php endif; ?>