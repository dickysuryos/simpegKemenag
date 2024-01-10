<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = 'Update Pegawai: ' . $model->NIP;
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NIP, 'url' => ['view', 'NIP' => $model->NIP]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
