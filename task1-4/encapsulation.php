class Employee {
private $salary;

public function setSalary($salary) {
if ($salary > 0) {
$this->salary = $salary;
} else {
echo "Invalid salary value";
}
}

public function getSalary() {
return $this->salary;
}
}

$employee = new Employee();
$employee->setSalary(50000);
echo "Employee Salary: $" . $employee->getSalary();