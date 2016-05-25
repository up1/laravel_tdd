<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewBankAccountOfUserTest extends TestCase{

    public function testCreateNewBankAccountByUser(){
      $user = factory(User::class)->create(["name" => "somkiat"]);

      $newAccount = factory(Account::class)->make(["account_no"=> "12345"]);
      $user->accounts()->save($newAccount);

      $this->visit('/somkiat')->see('Acoount:: 12345');
    }
}
