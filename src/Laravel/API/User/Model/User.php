<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omed\Laravel\API\User\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'email', 'password', 'username',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('omed_user.table_names.user');
    }
}
