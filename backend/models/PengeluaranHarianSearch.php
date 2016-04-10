<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PengeluaranHarian;

/**
 * PengeluaranHarianSearch represents the model behind the search form about `app\models\PengeluaranHarian`.
 */
class PengeluaranHarianSearch extends PengeluaranHarian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Pengeluaran', 'Jenis_Pengeluaran', 'Keterangan', 'Pencatat', 'Timestamp_Pengeluaran_Harian'], 'safe'],
            [['Total'], 'integer'],
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
        $query = PengeluaranHarian::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Total' => $this->Total,
            'Timestamp_Pengeluaran_Harian' => $this->Timestamp_Pengeluaran_Harian,
        ]);

        $query->andFilterWhere(['like', 'Id_Pengeluaran', $this->Id_Pengeluaran])
            ->andFilterWhere(['like', 'Jenis_Pengeluaran', $this->Jenis_Pengeluaran])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan])
            ->andFilterWhere(['like', 'Pencatat', $this->Pencatat]);

        return $dataProvider;
    }
}
