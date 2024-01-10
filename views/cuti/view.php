<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Cuti $model */

$this->title = $model->id_cuti;
$this->params['breadcrumbs'][] = ['label' => 'Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cuti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Yii::$app->user->identity->role == 'admin' ? Html::a('Update', ['/cuti/update', 'id_cuti' => $model->id_cuti], ['class' => 'btn btn-primary']) : '' ?>
        <?= Html::a('<i class="fa far fa-hand-point-up"></i> Cetak', ['id_cuti' => $model->id_cuti,'/cuti/export-pdf'], [
    'class'=>'btn btn-danger', 
    'target'=>'_blank', 
    'data-toggle'=>'tooltip', 
    'title'=>'Will open the generated PDF file in a new window'
]); ?>
        <?= Html::a('Delete', ['delete', 'id_cuti' => $model->id_cuti], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NIP',
            'Nama',
            'lama_cuti',
            'tgl_cuti',
            'tgl_cuti_berakhir',
            'status',
            'file',
            'id_cuti',
        ],
    ]) ?>

</div>
