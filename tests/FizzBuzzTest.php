<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    function casosDeUsos(): array
    {
        return [
            'noSePuedeDividirPorCero' => [0, 0],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [1, 1],
        ];
    }

    /**
     * @dataProvider casosDeUsos
     */
    public function testFizzBuzz($numero, $resultadoEsperado): void
    {
        $fizzBuzz = new FizzBuzz;

        $resultado = $fizzBuzz->verificalo($numero);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}