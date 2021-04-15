<?php

namespace ArtARTs36\EmployeeInterfaces\Employee;

/**
 * Trait EmployeeSettersAndGettersTrait
 * @package ArtARTs36\EmployeeInterfaces\Employee
 */
trait EmployeeSettersAndGettersTrait
{
    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    /**
     * @return mixed
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @param mixed $name
     * @return EmployeeInterface
     */
    public function setName($name): EmployeeInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $patronymic
     * @return EmployeeInterface
     */
    public function setPatronymic(string $patronymic): EmployeeInterface
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    /**
     * @param mixed $family
     * @return EmployeeInterface
     */
    public function setFamily($family): EmployeeInterface
    {
        $this->family = $family;

        return $this;
    }

    public function getFullName(): string
    {
        return implode(' ', [
            $this->getFamily(),
            $this->getName(),
            $this->getPatronymic(),
        ]);
    }
}
