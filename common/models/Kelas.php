<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id_kelas
 * @property string $namakelas
 */
class Kelas extends \yii\db\ActiveRecord
{
	public $id;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namakelas'], 'required'],
            [['namakelas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'namakelas' => 'Namakelas',
        ];
    }
	public function getSiswa(){
		return $this->hasMany(Siswaku::className(), ['id_kelas' => 'id_kelas']);
	}
	public function getSiswaCount()
{
    return $this->getSiswa()->count();
}
}
