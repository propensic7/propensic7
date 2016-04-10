<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuMakananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Makanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-makanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menu Makanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Menu',
            'Nama_Menu',
            'Harga_Menu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
