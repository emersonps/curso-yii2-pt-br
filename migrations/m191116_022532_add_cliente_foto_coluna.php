<?php

use yii\db\Migration;
use app\models\Cliente;
/**
 * Class m191116_022532_add_cliente_foto_coluna
 */
class m191116_022532_add_cliente_foto_coluna extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(Cliente::tableName(), 'foto', $this->string(60));   
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn(Cliente::tableName(),'foto');   
    }
}
