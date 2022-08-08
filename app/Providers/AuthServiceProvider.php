<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

//use Illuminate\Foundation\Auth\EmailVerificationRequest;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        VerifyEmail::toMailUsing(function ($notifiable, $url) {
//            return (new MailMessage)
//                ->subject('Verify Email Address')
//                ->line('An vao day de xac nhan dang ki tai khoan')
//                ->action('Verify Email Address', $url);
//        });
//
//        VerifyEmail::toMailUsing(function ($notifiable, $url) {
//            return (new MailMessage)
//                ->subject('Verify Email Address')
//                ->line('An vao day de xac nhan dang ki tai khoan')
//                ->markdown('login.verification', ['url' => $url]);
//        });

    }
}
