<?php

namespace App\Services;

use App\Models\User\User;
use SocialiteProviders\Manager\OAuth2\User as OAuthUser;

class UserService
{
    /**
     * Update or create a user.
     *
     * @param  OAuthUser  $user  The user object from Discord.
     * @return User The user model.
     */
    public static function updateOrCreate(OAuthUser $user)
    {
        return User::updateOrCreate([
            'discord_id' => $user->id
        ], [
            'name'             => $user->name,
            'email'            => $user->email,
            'nickname'         => $user->nickname,
            'avatar'           => $user->avatar,
            'locale'           => $user->user['locale'],
            'token'            => $user->token,
            'refresh_token'    => $user->refreshToken,
            'token_expires_at' => time() + (int) $user->expiresIn
        ]);
    }
}
