<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StatusPenerimaanBahanBaku;

/**
 * StatusPenerimaanBahanBakuSearch represents the model behind the search form about `app\models\StatusPenerimaanBahanBaku`.
 */
class StatusPenerimaanBahanBakuSearch extends StatusPenerimaanBahanBaku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Penerimaan', 'BahanBaku', 'Keterangan'], 'safe'],
            [['Jumlah_Dipesan', 'Jumlah_Diterima'], 'integer'],
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
        $query = StatusPenerimaanBahanBaku::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Jumlah_Dipesan' => $this->Jumlah_Dipesan,
            'Jumlah_Diterima' => $this->Jumlah_Diterima,
        ]);

        $query->andFilterWhere(['like', 'Id_Penerimaan', $this->Id_Penerimaan])
            ->andFilterWhere(['like', 'BahanBaku', $this->BahanBaku])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
