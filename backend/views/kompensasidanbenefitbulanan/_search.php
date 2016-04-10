<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KompensasiDanBenefitBulananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kompensasi-dan-benefit-bulanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Komben') ?>

    <?= $form->field($model, 'Bulan_Tahun') ?>

    <?= $form->field($model, 'Timestamp_KomBen') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
