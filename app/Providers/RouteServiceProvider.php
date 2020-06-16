<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapApiMasterAdminRoutes();
        $this->mapWebCareerAdminRoutes();
        $this->mapWebUniversityAdminRoutes();
        $this->mapWebUserAdminRoutes();

        $this->mapWebRoutes();
        $this->mapWebMasterAdminRoutes();
        $this->mapApiCareerAdminRoutes();
        $this->mapApiUniversityAdminRoutes();
        $this->mapApiUserAdminRoutes();

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /* master Admin Web Routes */
    protected function mapWebMasterAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/master/web.php'));
    }

    /* user Admin Web Routes */
    protected function mapWebUserAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/user/web.php'));
    }

    /* University Admin Web Routes */
    protected function mapWebUniversityAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/university/web.php'));
    }

    /* career Admin Web Routes */
    protected function mapWebCareerAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/career/web.php'));
    }

    /* master Admin API Routes */
    protected function mapApiMasterAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/master/api.php'));
    }

    /* user Admin API Routes */
    protected function mapApiUserAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/user/api.php'));
    }

    /* University Admin Api Routes */
    protected function mapApiUniversityAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/university/api.php'));
    }

    /* career Admin API Routes */
    protected function mapApiCareerAdminRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/career/api.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }
}
