<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KompensasiDanBenefitBulanan */

$this->title = 'Update Kompensasi Dan Benefit Bulanan: ' . ' ' . $model->Id_Komben;
$this->params['breadcrumbs'][] = ['label' => 'Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Komben, 'url' => ['view', 'id' => $model->Id_Komben]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kompensasi-dan-benefit-bulanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
