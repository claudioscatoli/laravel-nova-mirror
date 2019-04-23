<?php

namespace Laravel\Nova\Tests\Controller;

use Laravel\Nova\Tests\MySqlIntegrationTest;

class MySqlSearchControllerTest extends MySqlIntegrationTest
{
    use SearchControllerTests;

    public function setUp() : void
    {
        parent::setUp();

        $this->authenticate();
    }
}
