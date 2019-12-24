<?php

use yii\db\Migration;

/**
 * Class m191224_043612_akunfix
 */
class m191224_043612_akunfix extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		 $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }
		//akun 1
        $this->createTable('{{%tbl_akun1}}', [
            'kd_akun1' => $this->string(20)->notNull(),
            'akun1' => $this->string(50)
        ], $tableOptions);

        $this->addPrimaryKey('tbl_akun1_pkey', 'tbl_akun1', ['kd_akun1']);
		
		//akun 2
		$this->createTable('{{%tbl_akun2}}', [
            'kd_akun1' => $this->string(20)->notNull(),
            'kd_akun2' => $this->string(20)->notNull(),
            'akun2' => $this->string(50)
        ], $tableOptions);
		$this->addPrimaryKey('tbl_akun2_pkey', 'tbl_akun2', ['kd_akun1', 'kd_akun2']);
		
		//akun 3
		$this->createTable('{{%tbl_akun3}}', [
            'kd_akun1' =>$this->string(20)->notNull(),
            'kd_akun2' => $this->string(20)->notNull(),
            'kd_akun3' => $this->string(20)->notNull(),
            'akun3' => $this->string(50)
        ], $tableOptions);
		$this->addPrimaryKey('tbl_akun3_pkey', 'tbl_akun3', ['kd_akun1', 'kd_akun2', 'kd_akun3']);
		
		//insert akun
		$this->batchInsert(
            'tbl_akun1', 
            [
                'kd_akun1',
                'akun1'
            ], 
            [
                ['1', 'Aset'],
				['2', 'Kewajiban'],
				['3', 'Ekuitas Pemilik'],
				['4', 'Pendapatan'],
				['5', 'Biaya dan Beban'],
				['6', 'Pendapatan Lainnya'],
				['7',' Beban Lainnya']
				
            ]
        );
		$this->batchInsert(
            'tbl_akun2', 
            [
                'kd_akun1',
                'kd_akun2',
                'akun2'
            ], 
            [
			   ['1', '1.1', 'Kas'],
			   ['1','1.2', 'Tanah'],
			   ['2','2.1', 'Utang Usaha'],
			   ['3','3.1', 'Modal'],
			   ['4','4.1', 'Penjualan'],
			   ['5','5.1', 'Harga Pokok Penjualan'],
			   ['5','5.2', 'Beban Gaji Penjualan'],
			   ['5','5.3', 'Beban Gaji Kantor'],
			   ['6','6.1', 'Pendapatan Sewa'],
			   ['7','7.1','Beban Bunga']
            
			]
        );
		$this->batchInsert(
            'tbl_akun3', 
            [
                'kd_akun1',
                'kd_akun2',
                'kd_akun3',
                'akun3'
            ], 
            [
				['1', '1.1','1.1.2', 'Piutang Usaha'],
				['1', '1.1','1.1.5', 'Persediaan'],
				['1', '1.1','1.1.6', 'Bahan Habis Pakai'],
				['1', '1.1','1.1.7', 'Asuransi Dibayar Di Muka'],
				['1','1.2','1.2.3', 'Peralatan Toko'],
				['1','1.2','1.2.4', 'Akumulasi Penyusutan – Perlatan Toko'],
				['1','1.2','1.2.5', 'Peralatan Kantor'],
				['1','1.2','1.2.6', 'Akumulasi Penyusutan – Peralatan Kantor'],
				['2','2.1','2.1.1', 'Utang Gaji'],
				['2','2.1','2.1.2', 'Sewa Diterima Di Muka'],
				['2','2.1','2.1.5', 'Wesel Bayar'],
				['3','3.1','3.1.1', 'Prive'],
				['3','3.1','3.1.2', 'Ikhtisar Laba Rugi'],
				['4','4.1','4.1.1', 'Retur dan Potongan Penjualan'],
				['4','4.1','4.1.2', 'Diskon Penjualan'],
				['5','5.1','5.1.1', 'Harga Pokok Penjualan'],
				['5','5.2','5.2.1', 'Beban Iklan'],
				['5','5.2','5.2.2', 'Beban Penyusutan – Peralatan Toko'],
				['5','5.2','5.2.3', 'Ongkos Kirim Penjualan'],
				['5','5.2','5.2.9', 'Beban Penjualan Lain-lain'],
				['5','5.3','5.3.2', 'Beban Penyusutan – Peralatan Kantor'],
				['5','5.3','5.3.1', 'Beban Sewa'],
				['5','5.3','5.3.3', 'Beban Asuransi'],
				['5','5.3','5.3.4', 'Beban Bahan Habis Pakai'],
				['5','5.3','5.3.9', 'Beban Administrasi Lain-lain'],
			   ['6','6.1','6.1.1', 'Pendapatan Sewa'],
			   ['7','7.1','7.1.1','Beban Bunga']
            
			]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191224_043612_akunfix cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191224_043612_akunfix cannot be reverted.\n";

        return false;
    }
    */
}
