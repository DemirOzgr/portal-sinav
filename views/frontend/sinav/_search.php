<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sinav\models\SinavSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sinav-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sinav_id') ?>

    <?= $form->field($model, 'sinav_adi') ?>

    <?= $form->field($model, 'tarih') ?>

    <?= $form->field($model, 'saat') ?>

    <?php // echo $form->field($model, 'yer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
