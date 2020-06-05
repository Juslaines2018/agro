<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataAnimalsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-animals-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'value_1') ?>

    <?= $form->field($model, 'value_2') ?>

    <?= $form->field($model, 'value_3') ?>

    <?= $form->field($model, 'value_4') ?>

    <?php // echo $form->field($model, 'value_5') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
