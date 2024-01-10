<div class='main-header'>
<?php
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use twbs\bootstrap\dist;
echo Html::cssFile('@web/css/site.css');
/* @var $this \yii\web\View */
/* @var $content string */
echo Html::a('<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>'); 
NavBar::begin([
        'options' => ['class' => 'navbar navbar-expand-lg bg-body-tertiary','role' => 'navigation'
           
        ],
    ]);
 echo Html::beginTag('class = container');
 
    echo Nav::widget([
        'options' => ['class' => 'nav justify-content-end',],
        'items' => [
            ['label' => 'Kinerja Kepegawaian', 'url','options' => ['class' => ''],
            'items' => [
                ['label' => 'Pengajuan Cuti', 'url' => ['/cuti']],
                ['label' => 'Disposisi', 'url' => ['/controller/sub-action2']],
                ['label' => 'Surat Tugas', 'url' => ['/controller/sub-action2']],
                ['label' => 'Alibi', 'url' => ['/controller/sub-action2']],
                ['label' => 'Agenda', 'url' => ['/controller/sub-action2']],
                // Add more submenu items as needed
            ]],
            ['label' => 'Layanan Kepegawaian', 'url','items' => [
                ['label' => 'Usul Pensiun', 'url' => ['/controller/sub-action1']],
                ['label' => 'Usul Kenaikan Pangkat', 'url' => ['/controller/sub-action2']],
                ['label' => 'Usul Ijin Belajar', 'url' => ['/controller/sub-action2']],
                ['label' => 'Usul Pencantuman Gelar', 'url' => ['/controller/sub-action2']],
                // Add more submenu items as needed
            ]],
            ['label' => 'Kartu Kepegawaian', 'url','items' => [
                ['label' => 'Usul Satya Lencana' ,'url' => ['/controller/sub-action1']],
                ['label' => 'Usul Kartu Taspen' ,'url' => ['/controller/sub-action1']],
                ['label' => 'Usul Kartu Pegawai' ,'url' => ['/controller/sub-action1']],
                ['label' => 'Usul Kartu Istri/Suami', 'url' => ['/controller/sub-action1']],
                ['label' => 'Usul Kartu BPJS', 'url' => ['/controller/sub-action1']],
            ]],
            ['label' => 'Pengaturan', 'url' ,'items' => [
                ['label' => 'Instansi', 'url' => ['/controller/sub-action1']],
                ['label' => 'User', 'url' => ['/controller/sub-action1']],
                ['label' => 'BackUp Database', 'url' => ['/controller/sub-action1']],
                ['label' => 'Restore Database', 'url' => ['/controller/sub-action1']],
            ]],
            ['label' => 'Panduan', 'url' => ['/controller/action']],
            ['label' => 'Profile' , 'items'=>[['label' => 'Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data' => ['method' => 'post']]]],
           
     ]
            // Add more categories as needed
        ],
    ]);

    NavBar::end();
?>
</div>