<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Komposisi */

$this->title = 'Update Komposisi: ' . ' ' . $model->Menu;
$this->params['breadcrumbs'][] = ['label' => 'Komposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Menu, 'url' => ['view', 'Menu' => $model->Menu, 'Bahan_Baku' => $model->Bahan_Baku]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="komposisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
