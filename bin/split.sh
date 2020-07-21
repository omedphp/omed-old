#!/usr/bin/env bash

set -e
set -x

CURRENT_BRANCH="master"
SPLITSH="${PWD}/bin/splitsh-lite"

function split()
{
    SHA1=`${SPLITSH} --prefix=$1`
    git push $2 "$SHA1:refs/heads/$CURRENT_BRANCH" -f
}

function remote()
{
    git remote add $1 $2 || true
}

remote orm-component git@github.com:omedphp/orm-component.git
remote user-component git@github.com:omedphp/user-component.git

remote laravel-core git@github.com:omedphp/laravel-core.git
remote laravel-orm git@github.com:omedphp/laravel-orm.git
remote laravel-pack git@github.com:omedphp/laravel-pack.git
remote laravel-security git@github.com:omedphp/laravel-security.git
remote laravel-user git@github.com:omedphp/laravel-user.git

split 'src/Component/ORM' orm-component
split 'src/Component/User' user-component
split 'src/Laravel/Core' laravel-core
split 'src/Laravel/ORM' laravel-orm
split 'src/Laravel/Pack' laravel-pack
split 'src/Laravel/Security' laravel-security
split 'src/Laravel/User' laravel-user
