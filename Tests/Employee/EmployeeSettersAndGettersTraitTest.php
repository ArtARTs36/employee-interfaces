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
        $workCondition = new class() implements WorkConditionInterface {
            use WorkConditionSettersAndGetters;
        };

        $id = rand(1, 99);

        $employee = new class($id, $workCondition) implements EmployeeInterface {
            use EmployeeSettersAndGettersTrait;

            private $workCondition;

            public function __construct(int $id, WorkConditionInterface $workCondition)
            {
                $this->id = $id;
                $this->workCondition = $workCondition;
            }

            public function getCurrentWorkCondition(): ?WorkConditionInterface
            {
                return $this->workCondition;
            }

            public function getWorkConditions(): array
            {
                return [];
            }
        };

        //

        [$name, $patronymic, $family] = ['Artem', 'Viktorovich', 'Ukrainskiy'];

        $employee->setName($name)
                 ->setPatronymic($patronymic)
                 ->setFamily($family);

        self::assertEquals($name, $employee->getName());
        self::assertEquals($patronymic, $employee->getPatronymic());
        self::assertEquals($family, $employee->getFamily());
        self::assertEquals($id, $employee->getId());
    }
}
