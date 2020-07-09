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

namespace Omed\Laravel\API\User\Controllers;

use Omed\Component\User\Manager\UserManager;
use Omed\Laravel\API\User\Model\Resource\UserResource;
use Omed\Laravel\API\User\Model\User;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(UserManager $manager)
    {
        $repository = $manager->getRepository();
        $data = $repository->findAll();

        return UserResource::collection($data);
    }
}
