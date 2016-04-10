<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MenuMakanan */

$this->title = 'Update Menu Makanan: ' . ' ' . $model->Id_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Menu Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Menu, 'url' => ['view', 'id' => $model->Id_Menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menu-makanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
