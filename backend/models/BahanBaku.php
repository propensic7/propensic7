<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bahan_baku".
 *
 * @property string $Id_Bahan
 * @property string $Nama_Bahan
 * @property integer $Jumlah_Stock
 * @property string $Satuan
 */
class BahanBaku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bahan_baku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Bahan', 'Nama_Bahan', 'Jumlah_Stock', 'Satuan'], 'required'],
            [['Jumlah_Stock'], 'integer'],
            [['Id_Bahan'], 'string', 'max' => 8],
            [['Nama_Bahan', 'Satuan'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Bahan' => 'Id  Bahan',
            'Nama_Bahan' => 'Nama  Bahan',
            'Jumlah_Stock' => 'Jumlah  Stock',
            'Satuan' => 'Satuan',
        ];
    }
}
