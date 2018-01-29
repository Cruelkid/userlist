<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

?>
<h1>/list/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<div class="users">
    <?php foreach ($users as $user): ?>
        <div class="user"L>
            <a href="<?= Url::to(['list/user', 'id' => $user->id]) ?>"><?= $user->first_name . ' ' . $user->last_name; ?></a>
        </div>
    <?php endforeach; ?>
</div>