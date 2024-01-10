<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\field\FieldRange;
use yii\bootstrap4\Modal;
// use kartik\form\ActiveForm;
// use kartik\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var app\models\Cuti $model */
/** @var yii\widgets\ActiveForm $form */
$NIP = Yii::$app->user->identity->NIP
?>

<div class="cuti-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'NIP')->textInput([ 'disabled' => true,
    'placeholder' => $NIP]) ?>

    <?= $form->field($model, 'lama_cuti')->textInput() ?>

<?= 
FieldRange::widget([
    'form' => $form,
    'model' => $model,
    'label' => 'Masukan tanggal cuti dan tanggal cuti berakhir',
    'attribute1' => 'tgl_cuti',
    'attribute2' => 'tgl_cuti_berakhir',
    'type' => FieldRange::INPUT_DATE,
]);
?>

    <!-- <?= $form->field($model, 'tgl_cuti')->textInput() ?> -->

    <!-- <?= $form->field($model, 'tgl_cuti_berakhir')->textInput() ?> -->

    <!-- <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
