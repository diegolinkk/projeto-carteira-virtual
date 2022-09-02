<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    private $userData;
    
    protected function setUp() : void
    {
        parent::setUp();

        $this->userData = [
            "name" => "Test User",
            "password" => "12345",
            "email" => "test@test.com",
            
        ];
    }

    public function test_user_creation()
    {
        $this->assertDatabaseCount("users",0);
        $this->post("login/create",$this->userData);
        $this->assertDatabaseCount("users",1);
    }

    public function test_login_feature_authorized()
    {
        //creating a user
        $this->post("/login/create",$this->userData);
        
        //user will login
        $this->post("/login",$this->userData);

        //now user can access protected route
        $this->get("/")->assertStatus(200);
    }

    public function test_login_feature_rejection()
    {
        //user without login can not access protected route
        $this->get("/")->assertStatus(302);
    }

}
