<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JenisPengeluaranHarianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Pengeluaran Harians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-pengeluaran-harian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jenis Pengeluaran Harian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Jenis',
            'Nama_Pengeluaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
