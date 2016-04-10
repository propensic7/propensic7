<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KompensasiDanBenefitBulanan;

/**
 * KompensasiDanBenefitBulananSearch represents the model behind the search form about `app\models\KompensasiDanBenefitBulanan`.
 */
class KompensasiDanBenefitBulananSearch extends KompensasiDanBenefitBulanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Komben', 'Bulan_Tahun', 'Timestamp_KomBen'], 'safe'],
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
        $query = KompensasiDanBenefitBulanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Timestamp_KomBen' => $this->Timestamp_KomBen,
        ]);

        $query->andFilterWhere(['like', 'Id_Komben', $this->Id_Komben])
            ->andFilterWhere(['like', 'Bulan_Tahun', $this->Bulan_Tahun]);

        return $dataProvider;
    }
}
