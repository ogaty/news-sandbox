<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function test_execlogin(): void
    {
        $email = 'test@example.com';
        $password = '12345678';
        $user = User::create([
            'name' => 'John Due',
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => $password,
        ]);
        $response->assertRedirect(route('mypage.home'));
        $this->assertAuthenticated();

        $response = $this->actingAs($user)->get(route('mypage.home'));
        $response->assertStatus(200);
    }

    /**
     * @test
     * @depends test_execlogin
     * @return void
     */
    public function test_news(): void
    {
        $user = User::find(1);
        $response = $this->actingAs($user)->get(route('mypage.news.index'));
        $response->assertStatus(200);
        $response = $this->actingAs($user)->get(route('mypage.news.create'));
        $response->assertStatus(200);
        $response = $this->actingAs($user)->post(route('mypage.news.store'), [
            'title' => 'dummy1',
            'body' => 'test news',
            'media' => null,
        ]);
        $response->assertRedirect(route('mypage.news.index'));

        $response = $this->actingAs($user)->get(route('mypage.news.delete', 1));
        $response->assertRedirect(route('mypage.news.index'));
        $news = News::find(1);
        $this->assertSoftDeleted($news);
    }

    /**
     * @test
     * @depends test_news
     * @return void
     */
    public function test_execlogout()
    {
        $response = $this->post('/logout');
        $response->assertRedirect(route('home'));
        $this->assertGuest();
    }
}
