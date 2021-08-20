<?php

namespace spec\Omed\Component\User\Model;

use Omed\Component\User\Model\User;
use Omed\Contracts\Resource\ResourceInterface;
use Omed\Contracts\Resource\ToggleableInterface;
use Omed\Contracts\User\UserInterface;
use PhpSpec\ObjectBehavior;

/**
 * @covers \Omed\Component\User\Model\User
 * @covers \Omed\Component\Resource\Model\ToggleableTrait
 */
class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    function it_implements_user_interface()
    {
        $this->shouldImplement(UserInterface::class);
    }

    function it_implements_toggleable_interface()
    {
        $this->shouldImplement(ToggleableInterface::class);
    }

    function it_implements_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    function its_id_should_be_mutable()
    {
        $this->setId('id');
        $this->getId()->shouldReturn('id');
    }

    function its_username_should_be_mutable()
    {
        $this->setUsername('username');
        $this->getUsername()->shouldBe('username');
    }

    function its_email_should_be_mutable()
    {
        $this->setEmail('email');
        $this->getEmail()->shouldBe('email');
    }

    function its_password_should_be_mutable()
    {
        $password ='password';
        $this->setPassword($password);
        $this->getPassword()->shouldReturn($password);
    }

    function its_plainPassword_should_be_mutable()
    {
        $this->getPlainPassword()->shouldReturn(null);
        $this->setPlainPassword('password');
        $this->getPlainPassword()->shouldReturn('password');
    }

    function its_fullName_should_be_mutable()
    {
        $this->getFullName()->shouldReturn(null);
        $this->setFullName('full name');
        $this->getFullName()->shouldReturn('full name');
    }

    function it_should_be_toggleable()
    {
        $this->isEnabled()->shouldReturn(true);

        $this->disable();
        $this->isEnabled()->shouldReturn(false);

        $this->enable();
        $this->isEnabled()->shouldReturn(true);
    }
}

