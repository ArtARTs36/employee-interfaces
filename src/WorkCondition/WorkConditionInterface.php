<?php

namespace ArtARTs36\EmployeeInterfaces\WorkCondition;

use ArtARTs36\EmployeeInterfaces\Employee\EmployeeInterface;

/**
 * Interface WorkConditionInterface
 * @package ArtARTs36\EmployeeInterfaces\WorkCondition
 */
interface WorkConditionInterface
{
    public function getRate(): float;

    public function getPosition(): string;

    public function getEmployee(): EmployeeInterface;

    public function getTabNumber(): string;

    public function getHireDate(): \DateTimeInterface;

    public function getFireDate(): \DateTimeInterface;

    public function getApplyDate(): \DateTimeInterface;
}
