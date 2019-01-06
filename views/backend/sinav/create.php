<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\sinav\models\Sinav */

$this->title = 'Create Sinav';
$this->params['breadcrumbs'][] = ['label' => 'Sinavs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
