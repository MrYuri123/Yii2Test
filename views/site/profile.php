<?php
     
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\captcha\Captcha;
     
    $this->title = 'Profile';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="site-profile">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Your profile information:</p>
        <div class="row">
            <div class="col-lg-5">
     
                <?php $form = ActiveForm::begin(['id' => 'form-profile']); ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'surname')->textInput() ?>
                    <?= $form->field($model, 'status')->dropDownList([
                       '0' => 'Offline',
                       '1' => 'Online',
                   ]); ?>
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'profile-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
     
            </div>
        </div>
    </div>
