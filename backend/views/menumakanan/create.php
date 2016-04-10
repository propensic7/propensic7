<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MenuMakanan */

$this->title = 'Create Menu Makanan';
$this->params['breadcrumbs'][] = ['label' => 'Menu Makanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-makanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
