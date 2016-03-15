<?php

/**
 * Created by Roman Myhailovich
 * Email: rmyhailovich@gmail.com
 * Date: 11/03/16
 * Time: 11:07 PM
 */
class RM_Testform_Model_Resource_Testform extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct(){
        $this->_init("testform/table_testform", "testform_id");
    }
}