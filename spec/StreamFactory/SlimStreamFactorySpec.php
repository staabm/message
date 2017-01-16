<?php

namespace spec\Http\Message\StreamFactory;

use Slim\Http\Stream;
use PhpSpec\ObjectBehavior;

/**
 * @require Slim\Http\Stream
 */
class SlimStreamFactorySpec extends ObjectBehavior
{
    use StreamFactoryBehavior;

    function it_is_initializable()
    {
        $this->shouldHaveType('Http\Message\StreamFactory\SlimStreamFactory');
    }

    function it_creates_a_stream_from_stream()
    {
        $resource = fopen('php://memory', 'rw');
        $this->createStream(new Stream($resource))
            ->shouldHaveType('Psr\Http\Message\StreamInterface');
    }

    function it_creates_a_stream_from_non_seekable_resource()
    {
        $url = 'https://raw.githubusercontent.com/php-http/multipart-stream-builder/master/tests/Resources/httplug.png';
        $resource = fopen($url, 'r');
        $this->createStream($resource)
            ->shouldHaveType('Psr\Http\Message\StreamInterface');
    }
}
