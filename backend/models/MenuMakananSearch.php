<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MenuMakanan;

/**
 * MenuMakananSearch represents the model behind the search form about `app\models\MenuMakanan`.
 */
class MenuMakananSearch extends MenuMakanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Menu', 'Nama_Menu'], 'safe'],
            [['Harga_Menu'], 'integer'],
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
        $query = MenuMakanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Harga_Menu' => $this->Harga_Menu,
        ]);

        $query->andFilterWhere(['like', 'Id_Menu', $this->Id_Menu])
            ->andFilterWhere(['like', 'Nama_Menu', $this->Nama_Menu]);

        return $dataProvider;
    }
}
