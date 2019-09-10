<?php
namespace arshiyan\moneyprice;
use Illuminate\Support\ServiceProvider;
class MoneyPriceServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
    }
}
?>
