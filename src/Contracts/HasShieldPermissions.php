<?php

declare(strict_types=1);

namespace TaasBr\FilamentShield\Contracts;

interface HasShieldPermissions
{
    public static function getPermissionPrefixes(): array;
}
