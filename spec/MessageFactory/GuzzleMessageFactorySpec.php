<?php

namespace spec\Http\Message\MessageFactory;

use PhpSpec\ObjectBehavior;
use spec\Http\Message\MessageFactoryBehavior;

class GuzzleMessageFactorySpec extends ObjectBehavior
{
    use MessageFactoryBehavior;

    function it_is_initializable()
    {
        $this->shouldHaveType('Http\Message\MessageFactory\GuzzleMessageFactory');
    }
}
