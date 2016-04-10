<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KompensasiDanBenefitBulanan */

$this->title = $model->Id_Komben;
$this->params['breadcrumbs'][] = ['label' => 'Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kompensasi-dan-benefit-bulanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Komben], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Komben], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Komben',
            'Bulan_Tahun',
            'Timestamp_KomBen',
        ],
    ]) ?>

</div>
