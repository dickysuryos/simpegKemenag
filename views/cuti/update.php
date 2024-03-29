<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cuti $model */

$this->title = 'Update Cuti: ' . $model->id_cuti;
$this->params['breadcrumbs'][] = ['label' => 'Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_cuti, 'url' => ['view', 'id_cuti' => $model->id_cuti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
