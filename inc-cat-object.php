<?php
  class Cat 
    
  {
    private $catName;
    private $catAge;
    
    public function getCatName()
    {
      return $this->catName;
    }
    
   public function setCatName($catName)	
	{
		$this->catName = $catName;
	}
    
     public function getCatAge()
    {
      return $this->catAge;
    }
    
   public function setCatAge($catAge)	
	{
		$this->catAge = $catAge;
	}
  }
?>