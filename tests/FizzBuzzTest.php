<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_a_number_divisible_by_three_is_replaced_by_the_word_fizz()
    {
        $fizz = new FizzBuzz();

        $this->assertEquals('Fizz', $fizz->isFizzOrBuzzOrNot(3 * rand()));
    }

    public function test_a_number_divisible_by_five_is_replaced_by_the_word_fizz()
    {
        $fizz = new FizzBuzz();

        $this->assertEquals('Buzz', $fizz->isFizzOrBuzzOrNot(5 * rand()));
    }

    public function test_a_number_divisible_by_five_and_three_is_replaced_by_the_word_fizzbuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $num = 15 * rand();

        $this->assertEquals('FizzBuzz', $fizzbuzz->isFizzOrBuzzOrNot($num));

    }

    public function test_a_number_not_divisible_by_five_or_three_remains_a_number()
    {
        $number = new FizzBuzz();
        $num = 7;

        $this->assertEquals('7', $number->isFizzOrBuzzOrNot($num));
    }
}
