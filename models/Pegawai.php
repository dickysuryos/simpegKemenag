<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Pegawai".
 *
 * @property int $NIP
 * @property string $Nama
 * @property string $Jabatan
 * @property string $Alamat
 *
 * @property Cuti[] $cutis
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIP', 'Nama', 'Jabatan', 'Alamat'], 'required'],
            [['NIP'], 'integer'],
            [['Nama', 'Jabatan', 'Alamat'], 'string', 'max' => 100],
            [['NIP'], 'unique'],
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
            'Jabatan' => 'Jabatan',
            'Alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(Cuti::class, ['NIP' => 'NIP']);
    }

    public function findByNIP($NIP) {
        return static::findOne(['NIP'=> $NIP]);
    }
}
