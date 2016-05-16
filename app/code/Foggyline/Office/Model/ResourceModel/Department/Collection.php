<?php
/**
 * Created by PhpStorm.
 * User: Tan
 * Date: 5/13/2016
 * Time: 4:07 PM
 */

namespace Foggyline\Office\Model\ResourceModel\Department;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'
        );
    }
}