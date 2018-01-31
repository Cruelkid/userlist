<?php
/* @var $this yii\web\View */
$this->title = "User " . $user->login;
?>

<h1 class="text-center">User login: <?= $user->login; ?></h1>

<div class="user">
    <table class="table">
        <tr>
            <th>Password</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Created</th>
            <th>Addresses</th>
        </tr>
        <tr>
            <td><?= $user->password; ?></td>
            <td><?= $user->first_name; ?></td>
            <td><?= $user->last_name; ?></td>
            <td><?= $user->gender; ?></td>
            <td><?= $user->created_at; ?></td>
            <td>
                <table class="table">
                    <tr>
                        <th>Post code</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>Home number</th>
                        <th>Apartment/office number</th>
                    </tr>
                    <?php foreach ($addresses as $address): ?>
                        <tr>
                            <td><?= $address->post_code; ?></td>
                            <td><?= $address->country; ?></td>
                            <td><?= $address->city; ?></td>
                            <td><?= $address->street; ?></td>
                            <td><?= $address->home_number; ?></td>
                            <td><?= $address->apartment_number; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>
</div>
