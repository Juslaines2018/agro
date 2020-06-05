<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataAnimals */

$this->title = 'Create Data Animals';
$this->params['breadcrumbs'][] = ['label' => 'Data Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-animals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
