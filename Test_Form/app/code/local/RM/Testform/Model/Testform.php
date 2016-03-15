<?php
/**
 * Created by Roman Myhailovich
 * Email: rmyhailovich@gmail.com
 * Date: 11/03/16
 * Time: 11:07 PM
 */
class RM_Testform_Model_Testform extends Mage_Core_Model_Abstract
{
    public function _construct(){
        parent::_construct();
        $this->_init("testform/testform");
    }
}