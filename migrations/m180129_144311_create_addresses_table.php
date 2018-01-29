<?php

use yii\db\Migration;

/**
 * Handles the creation of table `addresses`.
 */
class m180129_144311_create_addresses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('addresses', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'post_code' => $this->integer()->notNull(),
            'country' => $this->integer(2)->notNull(),
            'city' => $this->string()->notNull(),
            'street' => $this->string()->notNull(),
            'home_number' => $this->string()->notNull(),
            'apartment_number' => $this->string()->notNull()
        ]);

        $this->createIndex(
            'idx-addresses-user_id',
            'addresses',
            'user_id'
        );

        $this->addForeignKey(
            'fk-addresses-user_id',
            'addresses',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-addresses-user_id',
            'addresses'
        );

        $this->dropIndex(
            'idx-addresses-user_id',
            'addresses'
        );

        $this->dropTable('addresses');
    }
}
