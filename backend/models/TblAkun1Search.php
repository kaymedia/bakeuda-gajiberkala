<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAkun1;

/**
 * TblAkun1Search represents the model behind the search form about `common\models\TblAkun1`.
 */
class TblAkun1Search extends TblAkun1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_akun1', 'akun1'], 'safe'],
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
        $query = TblAkun1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'kd_akun1', $this->kd_akun1])
            ->andFilterWhere(['like', 'akun1', $this->akun1]);

        return $dataProvider;
    }
}
