<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
$this->title = "User creation";
?>

<?php if(!empty($userForm)): ?>
    <h1 class="text-center">Create user</h1>
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($userForm, 'login')->textInput(); ?>
        <?= $form->field($userForm, 'password')->passwordInput(); ?>
        <?= $form->field($userForm, 'last_name')->textInput(); ?>
        <?= $form->field($userForm, 'first_name')->textInput(); ?>
        <?= $form->field($userForm, 'gender')->textInput(); ?>
        <input type="submit" name="post" value="Add address">
    <?php ActiveForm::end(); ?>
<?php endif; ?>
