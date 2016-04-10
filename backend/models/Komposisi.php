<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "komposisi".
 *
 * @property string $Menu
 * @property string $Bahan_Baku
 * @property integer $Jumlah_Bahan_Baku
 */
class Komposisi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komposisi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Menu', 'Bahan_Baku', 'Jumlah_Bahan_Baku'], 'required'],
            [['Jumlah_Bahan_Baku'], 'integer'],
            [['Menu', 'Bahan_Baku'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Menu' => 'Menu',
            'Bahan_Baku' => 'Bahan  Baku',
            'Jumlah_Bahan_Baku' => 'Jumlah  Bahan  Baku',
        ];
    }
}
