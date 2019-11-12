<?php

use yii\db\Migration;

/**
 * Class m191112_021834_produtos
 */
class m191112_021834_produtos extends Migration
{
    public function safeUp()
    {
        $this->createTable('produtos',[
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'data_cadastro' => $this->dateTime()->notNull(),
            'nome' => $this->string(60),
            'descricao' => $this->text(),
            'valor' => $this->decimal(10,2)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
        ]);
        
        $this->addForeignKey('FK_PRODUTOS_CATEGORIA_ID', 'produtos', 'categoria_id', 'categorias', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropForeignKey('FK_PRODUTOS_CATEGORIA_ID', 'produtos');
        $this->dropTable('podutos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191112_021834_produtos cannot be reverted.\n";

        return false;
    }
    */
}
