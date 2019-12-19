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
 * @property string|null $tglmasuk
 * @property string|null $gajiorangtua
 *
 * @property Kelas $kelas
 */
class Siswa extends \yii\db\ActiveRecord
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
            [['nis', 'nama'], 'string', 'max' => 20],
            [['tglmasuk'], 'string', 'max' => 30],
            [['gajiorangtua'], 'string', 'max' => 35],
            [['id_kelas'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['id_kelas' => 'id_kelas']],
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
            'tglmasuk' => 'Tglmasuk',
            'gajiorangtua' => 'Gajiorangtua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
    }
	
	public function getNamaKelas(){
		return $this->Kelas->namakelas;
	}
}
