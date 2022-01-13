<?php

namespace Tests\Unit;

use Tests\TestCase;

class CalcularDistanciaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_calcular_distancia()
    {
        try {
            app('App\Http\Controllers\FarmaciaController')->obtenerFarmaciasCercanas(1234.32, 2134.123);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
