<?php

class Math {

	public function add(...$num)
	{
		return array_sum($num);
	}
}

echo Math::add(1,2,3);