<?php

use yii\db\Migration;

/**
 * Class m191116_012645_create_clientes
 */
class m191116_012645_create_clientes extends Migration
{
    public function safeUp()
    {
            $this->createTable('{{%clientes}}',[
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clientes}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191116_012645_create_clientes cannot be reverted.\n";

        return false;
    }
    */
}
