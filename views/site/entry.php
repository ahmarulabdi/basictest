<?php

use yii\bootstrap\Button;use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model,'email') ?>

    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-success']); ?>
    </div>

<?php ActiveForm::end(); ?>
