<?php
// app/Providers/AuthServiceProvider.php
namespace App\Providers;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Services\Auth\JsonGuard;
use App\Extensions\MongoUserProvider;
use App\Database\MongoDatabase;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
 
class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    'App\Model' => 'App\Policies\ModelPolicy',
  ];
 
  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();
     
    $this->app->bind('App\Database\MongoDatabase', function ($app) {
      return new MongoDatabase(config('mongo.defaults.host'), config('mongo.defaults.port'), config('mongo.defaults.database'));
    });
     
    $this->app->bind('App\Models\Auth\User', function ($app) {
      return new User($app->make('App\Database\MongoDatabase'));
    });
 
    // add custom guard provider
    Auth::provider('mongo', function ($app, array $config) {
      return new MongoUserProvider($app->make('App\Models\Auth\User'));
    });
 
    // add custom guard
    Auth::extend('json', function ($app, $name, array $config) {
      return new JsonGuard(Auth::createUserProvider($config['provider']), $app->make('request'));
    });



  }
 
  public function register()
  {
    $this->app->bind(
      'App\Services\Contracts\NosqlServiceInterface',
      'App\Database\MongoDatabase'
    );
  }
}
