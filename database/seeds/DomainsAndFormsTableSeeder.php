<?php

use Illuminate\Database\Seeder;

class DomainsAndFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domainId = DB::table('domains')->insertGetId([
            'uid' => 'widget',
            'host' => 'base',
            'callback_url' => '/',
            'owner_id' => 1,
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'login',
            'title' => 'Виджет авторизации/регистрации',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'auth',
            'title' => 'Форма авторизации',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'reg',
            'title' => 'Форма регистрации',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'reset',
            'title' => 'Форма восстановления пароля',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'wp_auth',
            'title' => 'Форма авторизации Wordpress',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'wp_reg',
            'title' => 'Форма регистрации Wordpress',
            'redirect_url' => '/success',
        ]);

        DB::table('forms')->insert([
            'domain_id' => $domainId,
            'name' => 'wp_reset',
            'title' => 'Форма восстановления пароля Wordpress',
            'redirect_url' => '/success',
        ]);
    }
}
