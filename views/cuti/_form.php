<?php

use app\models\Pegawai;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Widget;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use kartik\date\DatePicker;
use kartik\field\FieldRange;
use yii\bootstrap4\Modal;
// use kartik\form\ActiveForm;
// use kartik\widgets\ActiveForm;

echo Html::cssFile('@web/css/site.css');
/** @var yii\web\View $this */
/** @var app\models\Cuti $model */
/** @var yii\widgets\ActiveForm $form */
$NIP = Yii::$app->user->identity->NIP
?>
<div class="top-view">
<div class="cuti-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'NIP')->textInput([ 'disabled' => true,
    'placeholder' => $NIP]) ?>
    <label>Nama </label> <br/>
    <input type="text" style="width:100%;" placeholder= <?php echo htmlspecialchars(Yii::$app->user->identity->nama) ?> disabled></textarea>
    <?php
    // $data = new Pegawai();
    $search = Pegawai::find()->select(['NIP as value','Nama as label','NIP as NIP'])->asArray()->all();
      
    ?>
    <?php
   // $form->field($model, 'atasan')->widget(\yii\jui\AutoComplete::classname(), [
     //   'clientOptions' => [
       //     'source' => $search,
         //   'autoFill'=>true,
          //  'minLength'=>'1',
        //],
    //])
    ?>
   <?php
    //  Html::activeHiddenInput($model, 'atasan')
    ?>

 <?php
//   $form->field($model, 'atasan')->textInput()
 ?> 
    <?= $form->field($model, 'lama_cuti')->textInput() ?>

<?= 
FieldRange::widget([
    'form' => $form,
    'model' => $model,
    'label' => 'Masukan tanggal cuti dan tanggal cuti berakhir',
    'attribute1' => 'tgl_cuti',
    'attribute2' => 'tgl_cuti_berakhir',
    'type' => FieldRange::INPUT_DATE,
    'options' => [
        'style' => 'z-index: 1500;', // Set z-index pada fieldrange
    ],
    'widgetOptions1' => [
        'pluginOptions' => [
            'style' => 'z-index: 1500;', // Set z-index pada fieldrange
            'calendarWeeks' => true,
            'weekStart' => 1,
            'todayBtn' => true,
            'todayHighlight' => true,
            'format' => 'dd-mm-yyyy',
            'autoclose' => true,
            'minuteStep' => 15,
        ],
    ],
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
</div>