<?php

namespace Spec\Omed\Component\User\Model;

use Omed\Component\User\Model\User;
use PhpSpec\ObjectBehavior;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }
}
