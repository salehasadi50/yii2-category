<?php

use yii\db\Schema;
use yii\db\Migration;

class m160511_090943_create_category_tables extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'parent_id'=>$this->integer(11)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
            'sort_order'=>$this->integer(11)->notNull(),
            'creation_time' => $this->timestamp()->notNull(),
            'update_time' => $this->timestamp()->notNull(),    
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
    }
}
