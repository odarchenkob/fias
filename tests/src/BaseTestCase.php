<?php

namespace marvin255\fias\tests;

use PHPUnit\Framework\TestCase;
use Faker;

abstract class BaseTestCase extends TestCase
{
    /**
     * @var \Faker\Generator|null
     */
    private $faker;

    /**
     * @return \Faker\Generator
     */
    public function faker(): Faker\Generator
    {
        if ($this->faker === null) {
            $this->faker = Faker\Factory::create();
        }

        return $this->faker;
    }
}
