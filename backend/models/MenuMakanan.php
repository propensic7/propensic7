<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_makanan".
 *
 * @property string $Id_Menu
 * @property string $Nama_Menu
 * @property integer $Harga_Menu
 */
class MenuMakanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_makanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Menu', 'Nama_Menu', 'Harga_Menu'], 'required'],
            [['Harga_Menu'], 'integer'],
            [['Id_Menu'], 'string', 'max' => 8],
            [['Nama_Menu'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Menu' => 'Id  Menu',
            'Nama_Menu' => 'Nama  Menu',
            'Harga_Menu' => 'Harga  Menu',
        ];
    }
}
