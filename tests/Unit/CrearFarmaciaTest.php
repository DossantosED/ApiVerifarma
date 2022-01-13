<?php

namespace Tests\Unit;

use App\Models\Farmacia;
use Tests\TestCase;

class CrearFarmaciaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_success()
    {
        $farmacia = new Farmacia();
        $farmacia->nombre = "Verifarma";
        $farmacia->direccion = "Buenos Aires";
        $farmacia->latitud = 43.456;
        $farmacia->longitud = 23.673;
        $farmacia->save();
    }
}
