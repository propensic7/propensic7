<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KompensasiDanBenefitBulanan */

$this->title = 'Create Kompensasi Dan Benefit Bulanan';
$this->params['breadcrumbs'][] = ['label' => 'Kompensasi Dan Benefit Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kompensasi-dan-benefit-bulanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
