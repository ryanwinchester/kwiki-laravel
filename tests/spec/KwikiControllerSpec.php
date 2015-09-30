<?php

namespace spec\Kwiki;

use Kwiki\KwikiController;
use Pagemark\Pagemark;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KwikiControllerSpec extends ObjectBehavior
{
    function let(Pagemark $pagemark)
    {
        $this->beConstructedWith($pagemark, 'kwiki', 'kwiki::page');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(KwikiController::class);
    }
}
