<?php

echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echoo "sumiponpon";
echo "sumiponpon";


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
     * @return int
     */
    public function getEmployeeId(): mixed
    {
        return $this->employee_id;
    }

    /**
     * @param int $employee_id
     */
    public function setEmployeeId(int $employee_id): void
    {
        $this->employee_id = $employee_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}

$employee = new RegularEmployee("1","山田");

echo $employee->getEmployeeId();
echo $employee->getName();