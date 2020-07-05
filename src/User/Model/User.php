<?php

namespace Omed\Component\User\Model;

class User
{
    /**
     * @var string|int
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $salt;

    /**
     * @var null|string
     */
    protected $password;

    /**
     * @var string|null
     */
    protected $plainPassword;

    /**
     * @var \DateTimeInterface|null
     */
    protected $lastLogin;

    /**
     * @var string|null
     */
    protected $emailVerificationToken;

    /**
     * @var string|null
     */
    protected $passwordResetToken;

    /**
     * @var \DateTimeInterface|null
     */
    protected $passwordRequestedAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $verifiedAt;

    /**
     * @var bool
     */
    protected $locked = false;

    /**
     * @var \DateTimeInterface|null
     */
    protected $expiresAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $credentialsExpireAt;


}
