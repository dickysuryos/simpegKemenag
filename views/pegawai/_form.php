<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIP')->textInput() ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
