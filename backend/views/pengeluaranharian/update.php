<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PengeluaranHarian */

$this->title = 'Update Pengeluaran Harian: ' . ' ' . $model->Id_Pengeluaran;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran Harians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pengeluaran, 'url' => ['view', 'id' => $model->Id_Pengeluaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengeluaran-harian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
