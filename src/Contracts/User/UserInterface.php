<?php

namespace Omed\Contracts\User;

use Omed\Contracts\Resource\ResourceInterface;
use Omed\Contracts\Resource\ToggleableInterface;

interface UserInterface extends
    ToggleableInterface,
    ResourceInterface
{

}