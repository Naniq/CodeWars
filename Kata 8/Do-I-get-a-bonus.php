function bonusTime($salary, $bonus) {
    $multiplyer = 10;

    if ($bonus == true)
    {
        $bonusSalary = ($salary * $multiplyer);
        return '$' . $bonusSalary;
    }
    else
    {
        return '$' . $salary;     
    }
}