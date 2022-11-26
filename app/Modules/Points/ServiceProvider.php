<?php

namespace App\Modules\Points;

class ServiceProvider extends \App\Modules\ServiceProvider {

public function register() {
parent::register("points");
}

public function boot() {
parent::boot("points");
}

}