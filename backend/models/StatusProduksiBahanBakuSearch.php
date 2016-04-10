<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusProduksiBahanBaku;

/**
 * StatusProduksiBahanBakuSearch represents the model behind the search form about `app\models\StatusProduksiBahanBaku`.
 */
class StatusProduksiBahanBakuSearch extends StatusProduksiBahanBaku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Produksi', 'BahanBakuProduksi', 'Keterangan'], 'safe'],
            [['Bahan_Diambil', 'Bahan_Terproses'], 'integer'],
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
        $query = StatusProduksiBahanBaku::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Bahan_Diambil' => $this->Bahan_Diambil,
            'Bahan_Terproses' => $this->Bahan_Terproses,
        ]);

        $query->andFilterWhere(['like', 'Id_Produksi', $this->Id_Produksi])
            ->andFilterWhere(['like', 'BahanBakuProduksi', $this->BahanBakuProduksi])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
