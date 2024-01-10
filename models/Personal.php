<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Personal".
 *
 * @property int $id_personal
 * @property int $NIP
 * @property string $nama
 * @property string $alamat
 * @property string $username
 * @property string $password
 * @property string $email
 *
 * @property Pegawai $nIP
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIP', 'nama', 'alamat', 'username', 'password', 'email'], 'required'],
            [['NIP'], 'integer'],
            [['nama', 'alamat', 'username', 'password', 'email'], 'string', 'max' => 100],
            [['NIP'], 'unique'],
            [['NIP'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['NIP' => 'NIP']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personal' => 'Id Personal',
            'NIP' => 'Nip',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[NIP]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNIP()
    {
        return $this->hasOne(Pegawai::class, ['NIP' => 'NIP']);
    }
}
