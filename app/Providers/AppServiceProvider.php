<?php

namespace App\Providers;

use App\Services\ApprenticeService;
use App\Services\AreaService;
use App\Services\ComputerService;
use App\Services\CourseService;
use App\Services\Impl\ApprenticeServiceImpl;
use App\Services\Impl\AreaServiceImpl;
use App\Services\Impl\ComputerServiceImpl;
use App\Services\Impl\CourseServiceImpl;
use App\Services\Impl\TeacherServiceImpl;
use App\Services\Impl\TrainingCenterServiceImpl;
use App\Services\TeacherService;
use App\Services\TrainingCenterService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ApprenticeService::class, ApprenticeServiceImpl::class);
        $this->app->bind(AreaService::class, AreaServiceImpl::class);
        $this->app->bind(ComputerService::class, ComputerServiceImpl::class);
        $this->app->bind(CourseService::class, CourseServiceImpl::class);
        $this->app->bind(TeacherService::class, TeacherServiceImpl::class);
        $this->app->bind(TrainingCenterService::class, TrainingCenterServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
