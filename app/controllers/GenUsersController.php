<?php

class GenUsersController extends BaseController
{
    private $paragraphNum;
	private $generator;
	private $paragraphs;
	private $usersDataArray;
	private $usersName;
	private $usersAddress;
	private $usersText;
	private $addressFlag;
	private $profileFlag;
	
    public function __construct()
	{
        $this->paragraphNum = 0;
		$this->faker = Faker\Factory::create();
		$this->paragraphs = array();
		$this->usersDataArray = array();
		$this->usersName = '';
		$this->usersAddress = '';
		$this->usersText = '';
		$this->addressFlag = false;
		$this->profileFlag = false;
    }

    public function ShowUserGenerator()
    {
        return View::make('usersgen');		
    }

    public function ProcessInput()
    {
	    
		$this->paragraphNum = Input::get('input');
		$this->addressFlag = Input::get('address');
		$this->profileFlag = Input::get('profile');
		
		//print_r($this->paragraphNum);
		
		if ($this->paragraphNum > 0)
		{
           for ($i = 0; $i < $this->paragraphNum ; $i++)
			{
				$this->usersName = $this->faker->name;
				$this->usersAddress = $this->faker->address;
				$this->usersText = $this->faker->text;
				if($this->addressFlag == false && $this->profileFlag == false)
				{
				    array_push($this->usersDataArray, $this->usersName, "<br>");
				}
				else if($this->addressFlag == false && $this->profileFlag == true)
				{
				    array_push($this->usersDataArray, $this->usersName, $this->usersText, "<br>");
				}
				else if($this->addressFlag == true && $this->profileFlag == false)
				{
				    array_push($this->usersDataArray, $this->usersName, $this->usersAddress, "<br>");
				}
				else
				{
				    array_push($this->usersDataArray, $this->usersName, $this->usersAddress, $this->usersText, "<br>");
				}	
			}			
			
			return View::make('usersgen')
			                  ->with('outputArray', $this->usersDataArray);		
		}
		else
		{
			return View::make('usersgen');
		}	
    }
	
	
    public function GetParagraphNum()
	{
	    return $this->paragraphNum;
	}
	
    public function GetOutputArray()
	{
	    return $this->usersDataArray;
	}	
	
}