<?php

namespace ArtARTs36\EmployeeInterfaces\WorkCondition;

use ArtARTs36\EmployeeInterfaces\Employee\EmployeeInterface;

/**
 * Trait WorkConditionSettersAndGetters
 * @package ArtARTs36\EmployeeInterfaces\WorkCondition
 */
trait WorkConditionSettersAndGetters
{
    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return EmployeeInterface
     */
    public function getEmployee(): EmployeeInterface
    {
        return $this->employee;
    }

    public function getTabNumber(): string
    {
        return $this->tabNumber ?? $this->tab_number;
    }

    public function getHireDate(): \DateTimeInterface
    {
        return $this->hireDate ?? $this->hire_date;
    }

    public function getFireDate(): \DateTimeInterface
    {
        return $this->fireDate ?? $this->fire_date;
    }

    public function getApplyDate(): \DateTimeInterface
    {
        return $this->applyDate ?? $this->apply_date;
    }
}
