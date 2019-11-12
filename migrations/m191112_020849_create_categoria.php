<?php

use yii\db\Migration;

/**
 * Class m191112_020849_create_categoria
 */
class m191112_020849_create_categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categorias',[
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'data_cadastro' => $this->datetime()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('categorias');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191112_020849_create_categoria cannot be reverted.\n";

        return false;
    }
    */
}
