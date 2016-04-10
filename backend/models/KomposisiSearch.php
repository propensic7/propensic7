<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Komposisi;

/**
 * KomposisiSearch represents the model behind the search form about `app\models\Komposisi`.
 */
class KomposisiSearch extends Komposisi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Menu', 'Bahan_Baku'], 'safe'],
            [['Jumlah_Bahan_Baku'], 'integer'],
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
        $query = Komposisi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Jumlah_Bahan_Baku' => $this->Jumlah_Bahan_Baku,
        ]);

        $query->andFilterWhere(['like', 'Menu', $this->Menu])
            ->andFilterWhere(['like', 'Bahan_Baku', $this->Bahan_Baku]);

        return $dataProvider;
    }
}
