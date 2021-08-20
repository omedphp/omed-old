<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
    public function it_is_initializable()
    {
        $this->shouldHaveType(User::class);
    }

    public function it_implements_user_interface()
    {
        $this->shouldImplement(UserInterface::class);
    }

    public function it_implements_toggleable_interface()
    {
        $this->shouldImplement(ToggleableInterface::class);
    }

    public function it_implements_resource_interface()
    {
        $this->shouldImplement(ResourceInterface::class);
    }

    public function its_id_should_be_mutable()
    {
        $this->setId('id');
        $this->getId()->shouldReturn('id');
    }

    public function its_username_should_be_mutable()
    {
        $this->setUsername('username');
        $this->getUsername()->shouldBe('username');
    }

    public function its_email_should_be_mutable()
    {
        $this->setEmail('email');
        $this->getEmail()->shouldBe('email');
    }

    public function its_password_should_be_mutable()
    {
        $password ='password';
        $this->setPassword($password);
        $this->getPassword()->shouldReturn($password);
    }

    public function its_plainPassword_should_be_mutable()
    {
        $this->getPlainPassword()->shouldReturn(null);
        $this->setPlainPassword('password');
        $this->getPlainPassword()->shouldReturn('password');
    }

    public function its_fullName_should_be_mutable()
    {
        $this->getFullName()->shouldReturn(null);
        $this->setFullName('full name');
        $this->getFullName()->shouldReturn('full name');
    }

    public function it_should_be_toggleable()
    {
        $this->isEnabled()->shouldReturn(true);

        $this->disable();
        $this->isEnabled()->shouldReturn(false);

        $this->enable();
        $this->isEnabled()->shouldReturn(true);
    }
}
