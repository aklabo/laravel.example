<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MyTest extends TestCase
{
	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testExample()
	{
		$value = '200';
		$this->assertTrue($value === '200');
	}
}
