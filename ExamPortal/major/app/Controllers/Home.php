<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		return view('index1');
	}

	public function loginuser()
	{
		return view('loginuser');
	}
	public function loginadmin()
	{
		return view('loginadmin');
	}
	public function registeruser()
	{
		return view('registeruser');
	}
	public function registeradmin()
	{
		return view('registeradmin');
	}
	public function submit1()
	{
		return view('submit1');
	}
	
	public function adminportal()
	{
		return view('adminportal');
	}
	public function userportal()
	{
		return view('userportal');
	}
	public function userexamportal()
	{
		return view('userexamportal');
	}
	public function result()
	{
		return view('result');
	}
	public function resultt()
	{
		return view('resultt');
	}
	public function aboutus()
	{
		return view('aboutus');
	}
	 public function contactus()
	{
		return view('contactus');
	}
	public function add_option()
	{
		return view('add_option');
	}
	public function set_time()
	{
		return view('set_time');
	}
	public function add_set()
	{
		return view('add_set');
	}
	public function add_subject()
	{
		return view('add_subject');
	}
	public function edit_option()
	{
		return view('edit_option');
	}
	public function adminquestionview()
	{
		return view('adminquestionview');
	}
		public function updatequestioncomplete()
	{
		return view('updatequestioncomplete');
	}
	public function updatequestion()
	{
		return view('updatequestion');
	}
		public function delete()
	{
		return view('delete');
	}
	public function sub1()
	{
		return view('sub1');
	}
	public function logout1()
	{
		return view('logout');
	}
	//--------------------------------------------------------------------

}
