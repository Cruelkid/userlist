<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
$this->title = "Add address";
?>

<?php if(!empty($addressForm)): ?>
    <h1 class="text-center">Create user</h1>
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($addressForm, 'post_code')->textInput(); ?>
        <?= $form->field($addressForm, 'country')->textInput(); ?>
        <?= $form->field($addressForm, 'city')->textInput(); ?>
        <?= $form->field($addressForm, 'street')->textInput(); ?>
        <?= $form->field($addressForm, 'home_number')->textInput(); ?>
        <?= $form->field($addressForm, 'apartment_number')->textInput(); ?>
        <input type="submit" name="post" value="Create">
    <?php ActiveForm::end(); ?>
<?php endif; ?>