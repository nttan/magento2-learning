<?php
/**
 * Created by PhpStorm.
 * User: Tan
 * Date: 5/13/2016
 * Time: 4:12 PM
 */

namespace Foggyline\Office\Model;


class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'foggyline_office_employee';
    public function _construct()
    {
        $this-> _init('Foggyline\Office\Model\ResourceModel\Employee');
    }
}