<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan_bahan_baku".
 *
 * @property string $Id_Pemesanan
 * @property string $Timestamp_Pemesanan_Bahan_Baku
 */
class PemesananBahanBaku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pemesanan_bahan_baku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Pemesanan', 'Timestamp_Pemesanan_Bahan_Baku'], 'required'],
            [['Timestamp_Pemesanan_Bahan_Baku'], 'safe'],
            [['Id_Pemesanan'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Pemesanan' => 'Id  Pemesanan',
            'Timestamp_Pemesanan_Bahan_Baku' => 'Timestamp  Pemesanan  Bahan  Baku',
        ];
    }
}
