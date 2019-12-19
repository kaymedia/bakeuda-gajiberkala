<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $id_siswa
 * @property string|null $nis
 * @property string|null $nama
 * @property int|null $id_kelas
 */
class Siswaku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelas'], 'integer'],
            [['nis', 'nama', 'tglmasuk', 'gajiorangtua'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_siswa' => 'Id Siswa',
            'nis' => 'Nis',
            'nama' => 'Nama',
            'id_kelas' => 'Id Kelas',
            'tglmasuk' => 'Tanggal Masuk',
            'gajiorangtua' => 'Gaji Orang Tua',
        ];
    }
	public function getKelas(){
		return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
	}
	public function getNamaKelas(){
		return $this->kelas->namakelas;
	}
}
