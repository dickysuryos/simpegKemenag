<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property int $NIP
 * @property int $status
 * @property string $role
 * @property string $create_date
 * @property string $update_create
 *
 * @property Pegawai $nIP
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'authKey', 'accessToken', 'NIP', 'status', 'role', 'create_date', 'update_create'], 'required'],
            [['NIP', 'status'], 'integer'],
            [['create_date', 'update_create'], 'safe'],
            [['username', 'password', 'role'], 'string', 'max' => 60],
            [['authKey', 'accessToken'], 'string', 'max' => 100],
            [['NIP'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['NIP' => 'NIP']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'NIP' => 'Nip',
            'status' => 'Status',
            'role' => 'Role',
            'create_date' => 'Create Date',
            'update_create' => 'Update Create',
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
