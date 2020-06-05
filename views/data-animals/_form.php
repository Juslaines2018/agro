<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataAnimals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-animals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
