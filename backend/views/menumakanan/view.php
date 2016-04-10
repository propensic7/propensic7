<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MenuMakanan */

$this->title = $model->Id_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Menu Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-makanan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id_Menu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id_Menu], [
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
            'Id_Menu',
            'Nama_Menu',
            'Harga_Menu',
        ],
    ]) ?>

</div>
