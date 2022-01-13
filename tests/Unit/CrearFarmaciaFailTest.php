<?php

namespace Tests\Unit;

use App\Models\Farmacia;
use Tests\TestCase;


class CrearFarmaciaFailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example_fail()
    {
        $farmacia = new Farmacia();
        $farmacia->nombre = "Verifarma";
        $farmacia->direccion = "Buenos Aires";
        $farmacia->latitu = 43.456;
        $farmacia->longitud = 23.673;
        $farmacia->save();
    }
}
