<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lookup}}`.
 */
class m220707_083000_create_lookup_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lookup}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'code' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'position' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lookup}}');
    }
}
