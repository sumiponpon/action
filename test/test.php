<?php

class RegularEmployee2
{
    /**
     * @var int
     */
    private $employee_id;
    /**
     * @var string
     */
    private $name;
    /**
     * @param $employee_id
     * @param $name
     */
    public function __construct($employee_id, $name)
    {
        $this->employee_id = $employee_id;
        $this->name = $name;
    }
    /**
     * @return int
     */
    public function getEmployeeId(): int
    {
        return $this->employee_id;
    }
    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }
}
$employee = new RegularEmployee2("1","山田");
echo $employee->getEmployeeId();
echo $employee->getName();