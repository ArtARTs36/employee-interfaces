<?php

namespace ArtARTs36\EmployeeInterfaces\Tests\Employee;

use ArtARTs36\EmployeeInterfaces\Employee\EmployeeInterface;
use ArtARTs36\EmployeeInterfaces\Employee\EmployeeSettersAndGettersTrait;
use ArtARTs36\EmployeeInterfaces\WorkCondition\WorkConditionInterface;
use ArtARTs36\EmployeeInterfaces\WorkCondition\WorkConditionSettersAndGetters;
use PHPUnit\Framework\TestCase;

/**
 * Class EmployeeSettersAndGettersTraitTest
 * @package ArtARTs36\EmployeeInterfaces\Tests\Employee
 */
class EmployeeSettersAndGettersTraitTest extends TestCase
{
    public function test(): void
    {
        $workCondition = new WorkCondition();

        $employee = new Employee($workCondition);

        //

        $name = "Artem";

        $employee->setName($name);
        self::assertEquals($name, $employee->getName());
    }
}

class WorkCondition implements WorkConditionInterface
{
    use WorkConditionSettersAndGetters;
}

class Employee implements EmployeeInterface
{
    use EmployeeSettersAndGettersTrait;

    private $workCondition;

    public function __construct(WorkConditionInterface $workCondition)
    {
        $this->workCondition = $workCondition;
    }

    public function getCurrentWorkCondition(): ?WorkConditionInterface
    {
        return $this->workCondition;
    }
}