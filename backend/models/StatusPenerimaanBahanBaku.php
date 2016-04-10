<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status_penerimaan_bahan_baku".
 *
 * @property string $Id_Penerimaan
 * @property string $BahanBaku
 * @property integer $Jumlah_Dipesan
 * @property integer $Jumlah_Diterima
 * @property string $Keterangan
 */
class StatusPenerimaanBahanBaku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status_penerimaan_bahan_baku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Penerimaan', 'BahanBaku', 'Jumlah_Dipesan', 'Jumlah_Diterima', 'Keterangan'], 'required'],
            [['Jumlah_Dipesan', 'Jumlah_Diterima'], 'integer'],
            [['Id_Penerimaan', 'BahanBaku'], 'string', 'max' => 8],
            [['Keterangan'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Penerimaan' => 'Id  Penerimaan',
            'BahanBaku' => 'Bahan Baku',
            'Jumlah_Dipesan' => 'Jumlah  Dipesan',
            'Jumlah_Diterima' => 'Jumlah  Diterima',
            'Keterangan' => 'Keterangan',
        ];
    }
}
