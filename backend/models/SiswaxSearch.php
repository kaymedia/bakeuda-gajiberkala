<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswax;

/**
 * SiswaxSearch represents the model behind the search form of `common\models\Siswax`.
 */
class SiswaxSearch extends Siswax
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_siswa', 'id_kelas'], 'integer'],
            [['nis', 'nama'], 'safe'],
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
        $query = Siswax::find();

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
            'id_siswa' => $this->id_siswa,
            'id_kelas' => $this->id_kelas,
        ]);

        $query->andFilterWhere(['like', 'nis', $this->nis])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
