<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuti $model */

$this->title = 'Pengajuan Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-create">

    <h1><?= Html::encode('Silakan Masukan Informasi Cuti') ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
