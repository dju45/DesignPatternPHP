<?php

namespace App\Composite;

use App\Composite\EmployeeInterface;

class Organization
{
    protected $employees;

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}
