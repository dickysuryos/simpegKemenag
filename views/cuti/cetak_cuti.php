<?php 
use app\models\User;
use app\models\Pegawai;
use yii\helpers\Html;
use app\models\Cuti;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

$pegawai = new Pegawai();
$pegawai = $pegawai->findByNIP("$model->NIP");
$user = new User();
$user = $user->findByNIP("$model->NIP");
?>

<head>
    <meta charset="UTF-8">
    <title>Permohonan Cuti</title>
    <style>
        /* Styling untuk surat */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .letter {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .date {
            position: absolute;
            flex: 1; /* Take up available space */
            text-align: right;
            bottom: 0;
            margin-bottom: 20px;
        }
        .body {
            margin-bottom: 40px;
        }
        .signature {
            text-align: right;
        }
        .logo {
            width: 40px;
            height: 40px;
        }
       h3 u {
            height: 5px;
            width: 100%;
        }
        .toSend {
            position: absolute;
            text-align: left;
            flex: 1; /* Take up available space */
        }
        .subHeader{
            display: flex; /* Use flexbox */
            justify-content: space-between; /* Align items with space between */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<p style="text-align: left;">ANAK LAMPIRAN 1.b</p>
<p style="text-align: left;">PERATURAN BADAN KEPEGAWAIAN NEGARA REPUBLIK INDONESIA</p>
<p style="text-align: left;">NOMOR 24 TAHUN 2017</p>
<p style="text-align: left;">TENTANG TATA CARA PEMBERIAN CUTI PEGAWAI NEGERI SIPIL</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">Yogyakarta,...............................................</p>
<p style="text-align: right;">Kepada&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="text-align: right;">Yth. Kepala Kantor Kemenag Kab. Yogyakarta</p>
<p style="text-align: right;">Di Tempat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">PERMINTAAN DAN PEMBERIAN CUTI</p>
<table style="border-collapse: collapse; width: 100%; height: 72px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 30.2356%; height: 18px;" colspan="4">1.DATA PEGAWAI</td>
</tr>
<?php 
   
?>
<tr style="height: 18px;">
<td style="width: 30.2356%; height: 18px;">Nama</td>
<td style="width: 22.2077%; height: 18px;"><?php echo $pegawai->Nama ?></td>
<td style="width: 22.5567%; height: 18px;">NIP</td>
<td style="width: 25%; height: 18px;"><?php echo $pegawai->NIP ?></td>
</tr>

<tr style="height: 18px;">
<td style="width: 30.2356%; height: 18px;">Jabatan</td>
<td style="width: 22.2077%; height: 18px;"><?php echo $pegawai->Jabatan ?></td>
<td style="width: 22.5567%; height: 18px;">Masa Kerja</td>
<td style="width: 25%; height: 18px;">17 Tahun</td>
</tr>
<tr style="height: 18px;">
<td style="width: 30.2356%; height: 18px;">Unit Kerja</td>
<td style="width: 22.2077%; height: 18px;">Subbag Prakom</td>
<td style="width: 22.5567%; height: 18px;" colspan="2">&nbsp;</td>
</tr>
</tbody>
</table>
</body>
</html>
