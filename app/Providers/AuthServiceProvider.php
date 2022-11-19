<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\Metric;
use App\Models\Metric_value;
use App\Models\Project;
use App\Models\User;
use App\Policies\ProjectPolicy;
use App\Services\MetricService;
use App\Services\UserService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Project::class => ProjectPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-user', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('delete-user', function (User $user) {
            return $user->is_admin;
        });
        Gate::define('update-user', function (User $user) {
            return $user->is_admin;
        });




        Gate::define('update-project', function (User $user, Project $project) {
        return $user->id === $project->user_id;
        });
        Gate::define('delete-project', function (User $user, Project $project) {
            return $user->id === $project->user_id;
        });



        Gate::define('store-metric-value', function (User $user, Area $area) {
//            $userService  = new UserService();
            $userService = App::make(UserService::class);
            return $userService->get_users_by_area($area->id)->contains($user);
        });




        Gate::define('update-metric', function (User $user, Metric $metric) {
            $metricService  = App::make(MetricService::class);
            return $user->id === $metricService->get_user_by_metric($metric->id)->id;
        });
        Gate::define('store-metric', function (User $user, Project $project) {
            return $user->id === $project->user_id;
        });
        Gate::define('update-metric', function (User $user, Metric $metric) {
            $metricService  = App::make(MetricService::class);
            return $user->id === $metricService->get_user_by_metric($metric->id)->id;
        });
        Gate::define('delete-metric', function (User $user, Metric $metric) {
            $metricService  = App::make(MetricService::class);
            return $user->id === $metricService->get_user_by_metric($metric->id)->id;
        });
    }
}
