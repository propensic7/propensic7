<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BahanBaku;

/**
 * BahanBakuSearch represents the model behind the search form about `app\models\BahanBaku`.
 */
class BahanBakuSearch extends BahanBaku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Bahan', 'Nama_Bahan', 'Satuan'], 'safe'],
            [['Jumlah_Stock'], 'integer'],
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
        $query = BahanBaku::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Jumlah_Stock' => $this->Jumlah_Stock,
        ]);

        $query->andFilterWhere(['like', 'Id_Bahan', $this->Id_Bahan])
            ->andFilterWhere(['like', 'Nama_Bahan', $this->Nama_Bahan])
            ->andFilterWhere(['like', 'Satuan', $this->Satuan]);

        return $dataProvider;
    }
}
