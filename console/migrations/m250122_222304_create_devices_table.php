<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%devices}}`.
 */
class m250122_222304_create_devices_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%devices}}', [
            'id' => $this->primaryKey(),
            'device_name' => $this->string(255)->notNull(),
            'ip_address' => $this->string(45)->notNull()->unique(),
            'device_type' => "ENUM('Router', 'Switch', 'Firewall') NOT NULL",
            'status' => "ENUM('Online', 'Offline') NOT NULL",
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%devices}}');
    }
}
