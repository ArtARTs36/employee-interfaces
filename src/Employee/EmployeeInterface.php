<?php

namespace ArtARTs36\EmployeeInterfaces\Employee;

use ArtARTs36\EmployeeInterfaces\WorkCondition\WorkConditionInterface;

/**
 * Interface EmployeeInterface
 * @package ArtARTs36\EmployeeInterfaces\Employee
 */
interface EmployeeInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string|null
     */
    public function getPatronymic(): ?string;

    /**
     * @return string
     */
    public function getFamily(): string;

    /**
     * @param string $name
     * @return EmployeeInterface
     */
    public function setName(string $name): EmployeeInterface;

    /**
     * @param string $patronymic
     * @return EmployeeInterface
     */
    public function setPatronymic(string $patronymic): EmployeeInterface;

    /**
     * @param string $family
     * @return EmployeeInterface
     */
    public function setFamily(string $family): EmployeeInterface;

    /**
     * @return WorkConditionInterface
     */
    public function getCurrentWorkCondition(): ?WorkConditionInterface;

    /**
     * @return array<WorkConditionInterface>
     */
    public function getWorkConditions(): array;

    public function getFullName(): string;
}
