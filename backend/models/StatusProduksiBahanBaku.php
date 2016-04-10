<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_produksi_bahan_baku".
 *
 * @property string $Id_Produksi
 * @property string $BahanBakuProduksi
 * @property integer $Bahan_Diambil
 * @property integer $Bahan_Terproses
 * @property string $Keterangan
 */
class StatusProduksiBahanBaku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status_produksi_bahan_baku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Produksi', 'BahanBakuProduksi', 'Bahan_Diambil', 'Bahan_Terproses', 'Keterangan'], 'required'],
            [['Bahan_Diambil', 'Bahan_Terproses'], 'integer'],
            [['Id_Produksi', 'BahanBakuProduksi'], 'string', 'max' => 8],
            [['Keterangan'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Produksi' => 'Id  Produksi',
            'BahanBakuProduksi' => 'Bahan Baku Produksi',
            'Bahan_Diambil' => 'Bahan  Diambil',
            'Bahan_Terproses' => 'Bahan  Terproses',
            'Keterangan' => 'Keterangan',
        ];
    }
}
