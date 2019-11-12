<?php

use yii\db\Migration;

class m191112_032938_create_tamanhos extends Migration
{
    
    public function safeUp()
    {
        $tableOptions = null;

        if($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%tamanhos}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'abreviacao' => $this->string(10)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
            'criado_em' => $this->dateTime(),
            'atualizado_em' => $this->dateTime(),
        ], $tableOptions);

        $now = new DateTime;

        $this->batchInsert('{{%tamanho}}',['nome','abreviacao','criado_em','atualizado_em'],[
            ['Pequeno', 'P', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Médio', 'M', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Grande', 'G', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Extra Grande', 'GG', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Estra Grande Grande', 'XGG', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
        ]);
    }

    
    public function safeDown()
    {
        $this->dropTable('{{%tamanhos}}');

    }
}
