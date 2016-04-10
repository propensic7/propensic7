<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StatusPenerimaanBahanBakuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Status Penerimaan Bahan Bakus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-penerimaan-bahan-baku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Status Penerimaan Bahan Baku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Penerimaan',
            'BahanBaku',
            'Jumlah_Dipesan',
            'Jumlah_Diterima',
            'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
