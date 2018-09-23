<?php
namespace Acme;
//use Acme\Users\Person;

class Business {

	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(\Acme\Users\Person $person)
	{
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}