<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Siswa;

/**
 * SiswaSearch represents the model behind the search form about `common\models\Siswa`.
 */
class SiswaSearch extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_siswa', 'id_kelas'], 'integer'],
            [['nis', 'nama', 'tglmasuk', 'gajiorangtua'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Siswa::find();
		$query->joinWith[['kelas']];
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_siswa' => $this->id_siswa,
            'id_kelas' => $this->id_kelas,
        ]);

        $query->andFilterWhere(['like', 'nis', $this->nis])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tglmasuk', $this->tglmasuk])
            ->andFilterWhere(['like', 'gajiorangtua', $this->gajiorangtua]);

        return $dataProvider;
    }
}
