<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InvoiceBulanan;

/**
 * InvoiceBulananSearch represents the model behind the search form about `app\models\InvoiceBulanan`.
 */
class InvoiceBulananSearch extends InvoiceBulanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Invoice', 'Tanggal_Diterima', 'Status'], 'safe'],
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
        $query = InvoiceBulanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Tanggal_Diterima' => $this->Tanggal_Diterima,
        ]);

        $query->andFilterWhere(['like', 'Id_Invoice', $this->Id_Invoice])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
