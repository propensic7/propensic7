<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kompensasi_dan_benefit_bulanan".
 *
 * @property string $Id_Komben
 * @property string $Bulan_Tahun
 * @property string $Timestamp_KomBen
 */
class KompensasiDanBenefitBulanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kompensasi_dan_benefit_bulanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Komben', 'Bulan_Tahun'], 'required'],
            [['Timestamp_KomBen'], 'safe'],
            [['Id_Komben', 'Bulan_Tahun'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Komben' => 'Id  Komben',
            'Bulan_Tahun' => 'Bulan  Tahun',
            'Timestamp_KomBen' => 'Timestamp  Kom Ben',
        ];
    }
}
