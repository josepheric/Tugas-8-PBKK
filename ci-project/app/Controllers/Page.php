<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view("about");
	}
    
    public function contact()
	{
		echo view("contact");
	}
    
  
}