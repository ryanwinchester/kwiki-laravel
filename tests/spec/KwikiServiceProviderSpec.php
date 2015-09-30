<?php

namespace spec\Kwiki;

use Illuminate\Foundation\Application;
use Kwiki\KwikiServiceProvider;
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
        $this->shouldHaveType(KwikiServiceProvider::class);
    }
}
