<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="col-md-12">
    <h2>Форма</h2>
    <?php $form = ActiveForm::begin([
            'id' => 'my-form',
            'options' => [
                    'class'=> 'form-horizontal',
            ],
            'fieldConfig' => ['template' => "{label} \n <div class='col-md-5'> {input} </div> \n <div class='col-md-5'>{hint}</div>\n <div class='col-md-5'> {error}</div>",
            'labelOptions'=>['class' => 'col-md-2 control-label'],] ])  ?>

    <?= $form->field($model, 'id', ['template' => "{label} \n <div class='col-md-5'> {input} </div> \n <div class='col-md-5'>{hint}</div>\n <div class='col-md-5'> {error}</div>",
        'labelOptions'=>['class' => 'col-md-2 control-label'],]) ->label('Номер id')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'cows') ->label('Количество коров'); ?>
    <?= $form->field($model, 'mini_cows')  ->label('Количество тёлок');?>
    <?= $form->field($model, 'mini_cows_0_3_month') ->label('Количество телят 0-3 месяцев'); ?>
    <?= $form->field($model, 'mini_cows_3_6_month') ->label('Количество телят 3-6 месяцев'); ?>
    <?= $form->field($model, 'mini_cows_6_12_month') ->label('Количество телят 6-12 месяцев'); ?>
    <?= $form->field($model, 'mini_cows_12_18_month') ->label('Количество телят 12-18 месяцев'); ?>


    <div class="form-group">
        <div class="col-md-5 col-md-offset-2">
            <?= Html::submitButton('Ввести данные', ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end()  ?>
</div>

