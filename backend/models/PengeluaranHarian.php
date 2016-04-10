<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengeluaran_harian".
 *
 * @property string $Id_Pengeluaran
 * @property string $Jenis_Pengeluaran
 * @property integer $Total
 * @property string $Keterangan
 * @property string $Pencatat
 * @property string $Timestamp_Pengeluaran_Harian
 */
class PengeluaranHarian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengeluaran_harian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Pengeluaran', 'Jenis_Pengeluaran', 'Total', 'Keterangan', 'Pencatat'], 'required'],
            [['Total'], 'integer'],
            [['Timestamp_Pengeluaran_Harian'], 'safe'],
            [['Id_Pengeluaran'], 'string', 'max' => 8],
            [['Jenis_Pengeluaran'], 'string', 'max' => 4],
            [['Keterangan'], 'string', 'max' => 50],
            [['Pencatat'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Pengeluaran' => 'Id  Pengeluaran',
            'Jenis_Pengeluaran' => 'Jenis  Pengeluaran',
            'Total' => 'Total',
            'Keterangan' => 'Keterangan',
            'Pencatat' => 'Pencatat',
            'Timestamp_Pengeluaran_Harian' => 'Timestamp  Pengeluaran  Harian',
        ];
    }
}
