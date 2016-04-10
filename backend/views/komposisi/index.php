<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KomposisiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Komposisis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="komposisi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Komposisi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Menu',
            'Bahan_Baku',
            'Jumlah_Bahan_Baku',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
