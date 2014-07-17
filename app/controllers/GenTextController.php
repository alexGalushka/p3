<?php

class GenTextController extends BaseController
{
    private $paragraphNum;
	private $generator;
	private $paragraphs;
	
    public function __construct()
	{
        $this->paragraphNum = 0;
		$this->generator = new Badcow\LoremIpsum\Generator();
		$this->paragraphs = array();
    }

    public function ShowLoremIpsum()
    {
        return View::make('generator');		
    }

    public function ProcessInput()
    {
	    
		$this->paragraphNum = Input::get('input');
		
		//print_r($this->paragraphNum);
				
		if ($this->paragraphNum > 0)
		{
			$this->paragraphs = $this->generator->getParagraphs($this->paragraphNum);
			
			return View::make('generator')
			                  ->with('paragraphs', $this->paragraphs);		
		}
		else
		{
		    return View::make('generator'); 
		}
    }
	
	public function GetParagraphs()
	{
	    return $this->paragraphs;
	}
	
}