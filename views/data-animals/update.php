<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataAnimals */

$this->title = 'Update Data Animals: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-animals-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
