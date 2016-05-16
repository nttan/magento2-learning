<?php
/**
 * Created by PhpStorm.
 * User: Tan
 * Date: 5/13/2016
 * Time: 4:58 PM
 */

namespace Foggyline\Office\Setup;

use Magento\Eav\Setup\EavSetup;

class EmployeeSetup extends EavSetup
{
    public function getDefaultEntities()
    {
        /* #snippet1 */
        $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
        $entities = [
            $employeeEntity => [
                'entity_model' => 'Foggyline\Office\Model\ResourceModel\
Employee',
                'table' => $employeeEntity . '_entity',
                'attributes' => [
                    'department_id' => [
                        'type' => 'static',
                    ],
                    'email' => [
                        'type' => 'static',
                    ],
                    'first_name' => [
                        'type' => 'static',
                    ],
                    'last_name' => [
                        'type' => 'static',
                    ],
                ],
            ],
        ];
        return $entities;
    }
}