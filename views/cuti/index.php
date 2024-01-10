<?php

use app\models\Cuti;
use app\models\Pegawai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\CutiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Cuti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-index">

    <h1><?= Html::encode('Informasi Cuti Anda') ?></h1>
<style> 

</style>
    <p>
        <?= Html::a('Pengajuan Cuti', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Semua Cuti', ['index'], ['class' => 'btn btn-secondary']) ?>
        <?= Html::a('History diterima', ['history'], ['class' => 'btn btn-secondary']) ?>
    </p>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'NIP',
            'Nama',
            'Jabatan',
            'lama_cuti',
            'tgl_cuti',
            'tgl_cuti_berakhir',
            'status',
            //'file',
            //'id_cuti',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cuti $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_cuti' => $model->id_cuti]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
