<?php

namespace app\models;
use Yii;
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{   
    public const STATUS_ACTIVE = 10;
    const STATUS_DELETE = 0;
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
           [['date_create', 'date_update', 'NIP', 'role'], 'safe'],
           [['status'],'default','value' => self::STATUS_ACTIVE],
           ['status','in','range' => [self::STATUS_ACTIVE,self::STATUS_DELETE]],
       ];
   }



    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id'=> $id,'status'=> self::STATUS_ACTIVE]);
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        self::find()->where(['accesToken'=> $token]) -> all();
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        if (static::findOne(['username'=> $username,'status'=> self::STATUS_ACTIVE]) != NIL ) {
            return static::findOne(['username'=> $username,'status'=> self::STATUS_ACTIVE]);
        }
        // login menggunakan NIP
        return static::findOne(['NIP'=> $username ,'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
        /**
     * Gets query for [[NIP]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['NIP' => 'NIP']);
    }
    public function getID_NIP()
    {
        
        // Logic to get the full name
        return $this->NIP;
    }

    public function findByNIP($NIP) {
        return static::findOne(['NIP'=> $NIP,'status'=> self::STATUS_ACTIVE]);
    }
    public function getNama()
    {
        return $this->pegawai->Nama;
    }

    public function getNIP()
    {
        return $this->pegawai->NIP;
    }




}
