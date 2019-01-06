<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sinav\models\Sinav */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinav-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sinav_id')->textInput() ?>

    <?= $form->field($model, 'sinav_adi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tarih')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'saat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
