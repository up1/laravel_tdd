<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Account;

class UserTest extends TestCase{

    use DatabaseMigrations;

    public function testCreateNewUserShouldFound(){
      $createdUser = factory(User::class)->create(["name" => "somkiat"]);

      $foundUser = User::findByName('somkiat');

      $this->assertEquals($createdUser->id, $foundUser->id);
      $this->assertEquals($createdUser->name, $foundUser->name);
    }
}
