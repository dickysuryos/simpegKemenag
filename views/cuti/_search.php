<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CutiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'NIP') ?>

    <?= $form->field($model, 'lama_cuti') ?>

    <?= $form->field($model, 'tgl_cuti') ?>

    <?= $form->field($model, 'tgl_cuti_berakhir') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'id_cuti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
