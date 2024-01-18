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
$cuti = new Cuti();
?>
<html>
<head>
    <!-- <meta charset="UTF-8"> -->
    <title>Permohonan Cuti</title>
    <style>
    body {
        width: 100%;
    }
    img {
        display: block;
    margin: 0 auto;
    }
    .img-with-text {
 
    }
    </style>
</head>
<body>
<div class="img-with-text">
<img src="https://gunungkidul.kemenag.go.id/asset/file_info/LOGO_KEMENAG.png" alt="" width="40px" height="40px" style="position:absolute;"/>
<p style="text-align: center;"><span class="a"><span class="a">KEMENTERIAN AGAMA REPUBLIK INDONESIA</span></span></p>
<p style="text-align: center;"><span class="a">KANTOR KEMENTERIAN AGAMA KOTA&nbsp;YOGYAKARTA</span></p>
<p style="text-align: center;font-size:14px;">Jl. Ki Mangunsarkoro, Gunungketur, Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166</p>
<p style="text-align: center; font-size:14px;"><span class="a"><span class="l8"><span class="l7"><span class="l6"><span class="l6">e-mail :ptsp.kemenagkotyk@gmail.com</span></span></span></span></span></p>
<div class="ff0">&nbsp;</div>
</div>
<div class="ff0" style="text-align: center;"><hr /></div>
<div class="ff0" style="text-align: center;">&nbsp;</div>
<div class="ff0" style="text-align: center;"><span class="a">SURAT IZIN CUTI TAHUNAN</span></div>
<div class="ff0" style="text-align: center;"><span class="a"><span class="a">Nomor&nbsp;<span class="l">:&nbsp;<span class="l">B-&nbsp;/Kk.02.33/1/KP.08.2/10<span class="l6">/2017</span></span></span></span><span class="a">1.</span></span></div>
<div class="ff0" style="text-align: center;">&nbsp;</div>
<ol style="text-align: left;"><li>Diberikan Cuti Tahunan Kepada Pegawai Negeri Sipil :&nbsp;<br />Nama: <?php echo $pegawai->Nama ?><br />NIP: <?php echo $pegawai->NIP ?><br />Pangkat/Golongan Ruang: Penata Tk. I (III/d)<br />Jabatan: <?php echo $pegawai->Jabatan ?><br />Organisasi: Kantor Kementerian Agama Kota Gunungsitoli<br />
<br/>Terhitung Mulai Tanggal <?php Yii::$app->formatter->locale = 'id-ID'; echo Yii::$app->formatter->asDate($model->tgl_cuti, 'dd MMMM yyyy') ?> s.d. <?php echo Yii::$app->formatter->asDate($model->tgl_cuti_berakhir, 'dd MMMM yyyy') ?> selama <?php echo $model->lama_cuti ?> hari kerja sesuai Permohonan
Cuti Tahunan tanggal <?php echo Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?> dengan ketentuan sebagai berikut :<br />&nbsp;<br />a. Sebelum menjalankan Cuti Tahunan, wajib menyerahkan pekerjaannya kepada Atasan Langsung
atau pejabat lain yang ditunjuk.<br /><br />b. Segera setelah Cuti Tahunan yang bersangkutan supaya memberitahukan tanggal Cuti Tahunan
kepada pejabat berwewenang memberikan cuti.
<br /><br />c. Setelah menjalankan Cuti Tahunan wajib melaporkan diri kepada atasan langsung dan bekerja
kembali sebagaimana biasa.<br /><br/></li><li>&nbsp;Demikian Surat Izin Cuti Tahunan ini dibuat untuk dapat digunakan sebagaimana mestinya,</li></ol>
</ol>
<p style="text-align: right;"><span class="a">Yogyakarta, <?php echo Yii::$app->formatter->asDate('now', 'dd MMMM yyyy') ?> </span></span><span class="a">&nbsp;<br />An. Kepala,</span><span class="a">&nbsp;<br />Kasubbag Tata Usaha<br /><br /></span></p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;">&nbsp;</p>
<p style="text-align: right;"><span class="a">Ermansyah Polem</span></p>

<div id="WidgetFloater" style="display: none;">
<div id="WidgetLogoPanel"><span id="WidgetTranslateWithSpan">TRANSLATE with <img id="FloaterLogo" alt="" /></span> <span id="WidgetCloseButton" title="Exit Translation">x</span></div>
<div id="LanguageMenuPanel">
<div class="DDStyle_outer"><input id="LanguageMenu_svid" style="display: none;" autocomplete="on" name="LanguageMenu_svid" type="text" value="en" /> <input id="LanguageMenu_textid" style="display: none;" autocomplete="on" name="LanguageMenu_textid" type="text" /> <span id="__LanguageMenu_header" class="DDStyle" tabindex="0">English</span>
<div style="position: relative; text-align: left; left: 0;">
<div style="position: absolute; ;left: 0px;">
<div id="__LanguageMenu_popup" class="DDStyle" style="display: none;">
<img style="height: 7px; width: 17px; border-width: 0px; left: 20px;" alt="" /></div>
</div>
</div>
</div>
</div>
<div id="CTFLinksPanel"><span id="ExternalLinksPanel"><a id="HelpLink" title="Help" href="https://go.microsoft.com/?linkid=9722454" target="_blank"> <img id="HelpImg" alt="" /></a> <a id="EmbedLink" title="Get this widget for your own site"></a> <img id="EmbedImg" alt="" /> <a id="ShareLink" title="Share translated page with friends"></a> <img id="ShareImg" alt="" /> </span></div>
<div id="FloaterProgressBar">&nbsp;</div>
</div>
<div id="WidgetFloaterCollapsed" style="display: none;">TRANSLATE with <img id="CollapsedLogoImg" alt="" /></div>
<div id="FloaterSharePanel" style="display: none;">
<div id="ShareTextDiv"><span id="ShareTextSpan"> COPY THE URL BELOW </span></div>
<div id="ShareTextboxDiv"><input id="ShareTextbox" name="ShareTextbox" readonly="readonly" type="text" /> <!--a id="TwitterLink" title="Share on Twitter"> <img id="TwitterImg" /></a> <a-- id="FacebookLink" title="Share on Facebook"> <img id="FacebookImg" /></a--> <a id="EmailLink" title="Email this translation"></a> <img id="EmailImg" alt="" /></div>
 <div id="ShareFooter"><span id="ShareHelpSpan"><a id="ShareHelpLink"></a> <img id="ShareHelpImg" alt="" /></span> <span id="ShareBackSpan"><a id="ShareBack" title="Back To Translation"></a> Back</span></div>
<input id="EmailSubject" name="EmailSubject" type="hidden" value="Check out this page in {0} translated from {1}" /> <input id="EmailBody" name="EmailBody" type="hidden" value="Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft&reg; Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget" /> <input id="ShareHelpText" type="hidden" value="This link allows visitors to launch this page and automatically translate it to {0}." /></div>
<div id="FloaterEmbed" style="display: none;">
<div id="EmbedTextDiv"><span id="EmbedTextSpan">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id="EmbedHelpLink" title="Copy this code and place it into your HTML."></a> <img id="EmbedHelpImg" alt="" /></div>
<div id="EmbedTextboxDiv"><input id="EmbedSnippetTextBox" name="EmbedSnippetTextBox" readonly="readonly" type="text" value="&lt;div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'&gt;&lt;/div&gt;&lt;script type='text/javascript'&gt;setTimeout(function(){var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location &amp;&amp; location.href &amp;&amp; location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&amp;ctf=true&amp;ui=true&amp;settings=manual&amp;from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);&lt;/script&gt;" /></div>
<div id="EmbedNoticeDiv"><span id="EmbedNoticeSpan">Enable collaborative features and customize widget: <a href="http://www.bing.com/widget/translator" target="_blank">Bing Webmaster Portal</a></span></div>
<div id="EmbedFooterDiv"><span id="EmbedBackSpan"><a title="Back To Translation">Back</a></span></div>
</div> 
</div>
<!-- <body>
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
</table> -->
</body>
</html>
