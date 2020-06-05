<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use function app\controllers\debug;
use yii\base\Model;
use app\assets\AppAsset;

$this->title ='Растения';
?>

<div>
    <style>
        .jus{
            position: static;
            top:10px;
        }
    </style>
</div>
<div id="menu_body">
    <ul>
        <li class="button-form"><a href="#" onclick="openMenu('sub_menu_1');return(false)">Количество скота</a>
            <ul id="sub_menu_1">
                <li><a href="#">Подпункт №1</a></li>
                <li><a href="#">Подпункт №2</a></li>
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
    </div>
