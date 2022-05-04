<?php

namespace App;

class FizzBuzz
{
    public function verificalo(int $numero)
    {
        if ($numero == 0) {
            return $numero;
        }

        if ($numero % 3 == 0 && $numero % 5 == 0) {
            return 'FizzBuzz';
        }

        if ($numero % 3 == 0) {
            return 'Fizz';
        }

        if ($numero % 5 == 0) {
            return 'Buzz';
        }

        return $numero;
    }
}