<?php

namespace spec\Kwiki\Core;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory as View;
use Laravel\Lumen\Application;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KwikiServiceProviderSpec extends ObjectBehavior
{
    function let()
    {
        $app = new Application;
        $this->beConstructedWith($app);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Kwiki\Core\KwikiServiceProvider');
    }

    function it_loads_views()
    {
        $path = __DIR__.'/../resources/views';
        $namespace = 'kwiki';

        $this->boot();
    }
}
