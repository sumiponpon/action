<?php


class RegularEmployee
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
     * @return mixed
     */
    public function getEmployeeId(): mixed
    {
        return $this->employee_id;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
$employee = new RegularEmployee("1","山田");
echo $employee->getEmployeeId();
echo $employee->getName();