<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice_bulanan".
 *
 * @property string $Id_Invoice
 * @property string $Tanggal_Diterima
 * @property string $Status
 */
class InvoiceBulanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'invoice_bulanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Invoice', 'Tanggal_Diterima', 'Status'], 'required'],
            [['Tanggal_Diterima'], 'safe'],
            [['Id_Invoice'], 'string', 'max' => 8],
            [['Status'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Invoice' => 'Id  Invoice',
            'Tanggal_Diterima' => 'Tanggal  Diterima',
            'Status' => 'Status',
        ];
    }
}
