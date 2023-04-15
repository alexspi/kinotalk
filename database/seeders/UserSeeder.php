<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = $this->getUsers();

        foreach ($users as $user) {
            User::create([
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => $user['password']
            ]);
        }


        User::find(1)->assignRole('super_admin');
        User::find(2)->assignRole('moderator');
        User::find(4)->assignRole('author');
        User::find(5)->assignRole('user');
    }

    private function getUsers(): array
    {
        return json_decode($this->getFile(), true);
    }


    private function getPath(): string
    {
        return 'database/seeders/json_resources/users.json';
    }

    private function getFile(): bool|string
    {
        return file_get_contents($this->getPath());
    }
}
