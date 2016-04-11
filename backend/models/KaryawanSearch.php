<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Karyawan;

/**
 * KaryawanSearch represents the model behind the search form about `backend\models\Karyawan`.
 */
class KaryawanSearch extends Karyawan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Karyawan', 'Nama', 'Alamat', 'No_Telepon', 'Pendidikan_Terakhir'], 'safe'],
            [['Gaji'], 'integer'],
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
        $query = Karyawan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Gaji' => $this->Gaji,
        ]);

        $query->andFilterWhere(['like', 'Id_Karyawan', $this->Id_Karyawan])
            ->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'No_Telepon', $this->No_Telepon])
            ->andFilterWhere(['like', 'Pendidikan_Terakhir', $this->Pendidikan_Terakhir]);

        return $dataProvider;
    }
}
