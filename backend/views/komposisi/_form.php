<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Komposisi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="komposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Menu')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Bahan_Baku')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'Jumlah_Bahan_Baku')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
