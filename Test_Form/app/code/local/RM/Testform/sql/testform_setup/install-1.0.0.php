<?php
/**
 * Created by Roman Myhailovich
 * Email: rmyhailovich@gmail.com
 * Date: 11/03/16
 * Time: 4:21 PM
 */


$installer = $this;
$testform = $installer->getTable('testform/table_testform');
// НАЧАЛО установки
$installer->startSetup();

// для удаления старой таблицы
$installer->getConnection()->dropTable($testform);

$table = $installer->getConnection()
    ->newTable($testform)
    ->addColumn('testform_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array('identity'  => true,
        'nullable'  => false,
        'primary'   => true))

    ->addColumn('testform_firstname', Varien_Db_Ddl_Table::TYPE_TEXT, 64, array('nullable'  => false))
    ->addColumn('testform_lastname', Varien_Db_Ddl_Table::TYPE_TEXT, 64, array('nullable'  => false))
    ->addColumn('testform_email', Varien_Db_Ddl_Table::TYPE_TEXT, 128, array('nullable'  => false))
    ->addColumn('testform_comment', Varien_Db_Ddl_Table::TYPE_TEXT, null , array('nullable'  => false))

    ->addIndex('idx_testform_firstname', 'testform_firstname')
    ->addIndex('idx_testform_lastname', 'testform_lastname')
    ->addIndex('idx_testform_email', 'testform_email');
// создаем структуру новой таблицы

// само создание таблицы
$installer->getConnection()->createTable($table);
// КОНЕЦ установки
$installer->endSetup();
