<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cuti".
 *
 * @property int $NIP
 * @property string $Nama
 * @property int $lama_cuti
 * @property string $tgl_cuti
 * @property string $tgl_cuti_berakhir
 * @property string $status
 * @property string|null $file
 * @property int $id_cuti
 */

class Cuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIP', 'lama_cuti', 'tgl_cuti', 'tgl_cuti_berakhir', 'status'], 'required'],
            [['NIP', 'lama_cuti'], 'integer'],
            [['tgl_cuti', 'tgl_cuti_berakhir'], 'string', 'max' => 50],
            [['status', 'file'], 'string', 'max' => 50],
            [['nama'],'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'NIP' => 'Nip',
            'Nama' => 'Nama',
            'lama_cuti' => 'Lama Cuti',
            'tgl_cuti' => 'Tgl Cuti',
            'tgl_cuti_berakhir' => 'Tgl Cuti Berakhir',
            'status' => 'Status',
            'file' => 'File',
            'id_cuti' => 'Id Cuti',
        ];
    }
        /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::className(), ['NIP'=> 'NIP']);
    }

    public function getNama()
    {
        return $this->pegawai->Nama;
    }

    public function getJabatan()
    {   
        return $this->pegawai->Jabatan;

    }
}
