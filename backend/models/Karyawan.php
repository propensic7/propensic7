<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property string $Id_Karyawan
 * @property string $Nama
 * @property string $Alamat
 * @property string $No_Telepon
 * @property string $Pendidikan_Terakhir
 * @property integer $Gaji
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Karyawan', 'Nama', 'Alamat', 'No_Telepon', 'Pendidikan_Terakhir', 'Gaji'], 'required'],
            [['Gaji'], 'integer'],
            [['Id_Karyawan'], 'string', 'max' => 8],
            [['Nama', 'Alamat', 'Pendidikan_Terakhir'], 'string', 'max' => 25],
            [['No_Telepon'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Karyawan' => 'Id  Karyawan',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'No_Telepon' => 'No  Telepon',
            'Pendidikan_Terakhir' => 'Pendidikan  Terakhir',
            'Gaji' => 'Gaji',
        ];
    }
}
