<?php if (empty($usersData)): ?>

<p>No registered users</p>

<?php else: ?>

    <?php foreach ($usersData as $data): ?>

        <hr>
        <p><b>Name:</b> <?= $data['username'] ?></p>
        <p><b>Surame:</b> <?= $data['surname'] ?></p>

        <?php if (!Yii::$app->user->isGuest): ?>
        <p><b>Status:</b> <?= $data['status'] == 0 ? 'Offline' : 'Online' ?></p>
        <?php endif; ?>

    <?php endforeach; ?>

<?php endif; ?>
