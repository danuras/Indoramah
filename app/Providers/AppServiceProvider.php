<?php

namespace App\Providers;

use App;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (\Schema::hasTable("email_services")) {
                $mail = DB::table('email_services')->first();
                if ($mail) {
                    $config = array(
                        'driver' => 'smtp',
                        'from' => array('address' => $mail->email_sender, 'name' => $mail->name),
                        'username' => $mail->email_sender,
                        'password' => $mail->password,
                        'host' => 'smtp.gmail.com',
                        'port' => 465,
                        'encryption' => 'ssl',
    
                    );
    
                    \Config::set('mail', $config);
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
}
