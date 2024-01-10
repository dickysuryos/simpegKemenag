<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuti;

/**
 * CutiSearch represents the model behind the search form of `app\models\Cuti`.
 */
class CutiSearch extends Cuti
{
    public $jabatan;
    public $nama;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NIP'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $query = Cuti::find();
        $query->joinWith('pegawai');
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->sort->attributes['Nama'] = [
            'asc'=> ['Nama'=> SORT_ASC],
            'desc'=> ['Nama'=> SORT_DESC],
        ];

        $dataProvider->sort->attributes['Jabatan'] = [
            'asc'=> ['Jabatan'=> SORT_ASC],
            'desc'=> ['Jabatan'=> SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Pegawai.NIP' => $this->NIP,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like','jabatan',$this->jabatan])
            ->andFilterWhere(['like','Nama', $this->nama]);

        return $dataProvider;
    }
    public function searchByIdentity($params)
    {
        $query = Cuti::find();
        $query->joinWith('pegawai');
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Pegawai.NIP' => \Yii::$app->user->identity->NIP,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
                ->andFilterWhere(['like', 'file', $this->file]);

        
        return $dataProvider;
    }

  
}
