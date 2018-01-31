<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

?>
<h1 class="text-center">All users:</h1>

<div class="users">
    <ol>
        <?php foreach ($users as $user): ?>
            <div class="user">
                    <li class="list-group"><a href="<?= Url::to(['list/displayuser', 'id' => $user->id]) ?>"><?= $user->first_name . ' ' . $user->last_name; ?></a></li>
            </div>
        <?php endforeach; ?>
    </ol>
</div>