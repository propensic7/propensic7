<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PemesananBahanBaku;

/**
 * PemesananBahanBakuSearch represents the model behind the search form about `app\models\PemesananBahanBaku`.
 */
class PemesananBahanBakuSearch extends PemesananBahanBaku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Pemesanan', 'Timestamp_Pemesanan_Bahan_Baku'], 'safe'],
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
        $query = PemesananBahanBaku::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Timestamp_Pemesanan_Bahan_Baku' => $this->Timestamp_Pemesanan_Bahan_Baku,
        ]);

        $query->andFilterWhere(['like', 'Id_Pemesanan', $this->Id_Pemesanan]);

        return $dataProvider;
    }
}
