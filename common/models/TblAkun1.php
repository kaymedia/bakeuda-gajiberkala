<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_akun1".
 *
 * @property string $kd_akun1
 * @property string|null $akun1
 */
class TblAkun1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_akun1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_akun1'], 'required'],
            [['kd_akun1'], 'string', 'max' => 20],
            [['akun1'], 'string', 'max' => 50],
            [['kd_akun1'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_akun1' => 'Kd Akun1',
            'akun1' => 'Akun1',
        ];
    }
}
