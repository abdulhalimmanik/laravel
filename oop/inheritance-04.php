<?php

class Mailer {

	public function send($to, $form, $body)
	{

	}
}

class UserMailer extends Mailer {

	public function senduser(User $user)
	{
		return $this->send($user->mail);
	}
}