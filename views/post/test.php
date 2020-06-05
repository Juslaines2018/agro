<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use function app\controllers\debug;
use yii\base\Model;
use app\assets\AppAsset;

$this->title ='Животные';
?>

<!--
<h3>Количество скота</h3>

    <div class="row">
        <div class="col-lg-5">

            <?php /*$form = ActiveForm::begin(['id' => 'farm-form']) ?>

            <?= $form->field($model, 'cows')->label('Количество коров')->textInput(['autofocus' => true])->input('number')  ?>
            <?= $form->field($model, 'mini_cows')->label('Количество мини коров')->input('number')  ?>
            <div class="form-group">
                <?= Html::submitButton('Отправить', ['class' =>'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end() */?>

        </div>
    </div>
-->

<!--Выпадающее меню -->
<div>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <button class="knop">Количество скота</button>
    <div class="dropdown-menu1">
        <div class="row form">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'farm-form']) ?>
                <?= $form->field($model, 'cows')->label('Количество коров')->textInput(['autofocus' => true])->input('number')  ?>
                <?= $form->field($model, 'mini_cows')->label('Количество мини коров')->input('number')  ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' =>'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>

<br><br>

<div id="menu_body">
    <ul>
        <li class="button-form"><a href="#" onclick="openMenu('sub_menu_1');return(false)">Количество скота</a>
            <ul id="sub_menu_1">
                <li><a href="#">
                        <div class="row">
                            <div class="col-lg-5">
                                <?php $form = ActiveForm::begin(['id' => 'farm-form']) ?>
                                <?= $form->field($model, 'cows')->label('Количество коров')->textInput(['autofocus' => true])->input('number')  ?>
                                <?= $form->field($model, 'mini_cows')->label('Количество мини коров')->input('number')  ?>
                                <div class="form-group">
                                    <?= Html::submitButton('Отправить', ['class' =>'btn btn-success']) ?>
                                </div>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>
                    </a></li>
            </ul>
        </li>
        <li><a href="#" onclick="openMenu('sub_menu_2');return(false)">Количество осемененных коров</a>
            <ul id="sub_menu_2">
                <li><a href="#">Подпункт №1</a></li>
                <li><a href="#">Подпункт №2</a></li>
            </ul>
        </li>
        <li><a href="#" onclick="openMenu('sub_menu_3');return(false)">Количество осемененных телок</a>
            <ul id="sub_menu_3">
                <li><a href="#">Подпункт №1</a></li>
            </ul>
        </li>
    </ul>
</div>
