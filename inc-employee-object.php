<?php
class Employee
{
	private $empID;
	private $firstName;
	private $lastName;
	private $jobTitle;
	private $hourlyWage;

/*	public function __construct() 
	{
	}
*/	
	public function addEmployee()
	{
		$empRecord = $this->empID.", ".$this->firstName.", ".$this->lastName.", ".$this->jobTitle.", ".$this->hourlyWage."\n";
		$empFile = fopen("employees.txt", "a");
		fputs($empFile, $empRecord);
		fclose($empFile);
	}

	public function findEmployee($id)
	{
		$empFile = fopen("employees.txt", "r");
		$empRecord = fgets($empFile);
		$notFound = true;
		while (!feof($empFile) and $notFound)
		{
			list ($empID, $fName, $lName, $title, $wage) = explode(",", $empRecord);
			if ($id == $empID)
			{
				$this->empID = $empID;
				$this->firstName = $fName;
				$this->lastName = $lName;
				$this->jobTitle = $title;
				$this->hourlyWage = trim($wage);
				$notFound = false;
			}
			$empRecord = fgets($empFile);
		}
   
		fclose($empFile);
//Add an IF.. ELSE structure at the end the findEmployee() function that returns 0 if 
       if($notFound==true)
          return 0;
          else 
          return 1;
          
                //$notFound is true, otherwise returns 1 if it is false. 
                //(be sure you do this AFTER the loop structure and not inside the loop structure!). 
	}

	public function getID()
	{
		return $this->empID;
	}
	
	public function setID($empID)	
	{
		$this->empID = $empID;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function setFirstName($fName)
	{
		$this->firstName = $fName;
	}
	
	public function getLastName()
	{	
		return $this->lastName;
	}
	
	public function setLastName($lName)
	{
		$this->lastName = $lName;
	}
	
	public function getJobTitle()
	{
		return $this->jobTitle;
	}
	
	public function setJobTitle($title)
	{
		$this->jobTitle = $title;
	}
	
	public function getHourlyWage()
	{
		return $this->hourlyWage;
	}
	
	public function setHourlyWage($hourlyWage)
	{
		$this->hourlyWage = $hourlyWage;
	}
	
	public function getWeeklyPay()
	{
		return number_format ($this->hourlyWage * 40, 2);
	}
  
    public function getAnnualPay()
    {
      return number_format ($this->hourlyWage * 40 * 52);
    }
  
	
} // end of class definition
?>