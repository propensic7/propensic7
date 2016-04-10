<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PemesananBahanBakuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanan Bahan Bakus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-bahan-baku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pemesanan Bahan Baku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pemesanan',
            'Timestamp_Pemesanan_Bahan_Baku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
