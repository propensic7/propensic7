<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BahanBakuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahan-baku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_Bahan') ?>

    <?= $form->field($model, 'Nama_Bahan') ?>

    <?= $form->field($model, 'Jumlah_Stock') ?>

    <?= $form->field($model, 'Satuan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
