<?php

namespace ArtARTs36\EmployeeInterfaces\WorkCondition;

use ArtARTs36\EmployeeInterfaces\Employee\EmployeeInterface;

/**
 * Interface WorkConditionInterface
 * @package ArtARTs36\EmployeeInterfaces\WorkCondition
 */
interface WorkConditionInterface
{
    /**
     * @return float
     */
    public function getRate(): float;

    /**
     * @return string
     */
    public function getPosition(): string;

    /**
     * @return EmployeeInterface
     */
    public function getEmployee(): EmployeeInterface;
}
