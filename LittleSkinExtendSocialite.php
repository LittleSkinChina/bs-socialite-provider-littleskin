<?php

namespace LittleSkinChina\BsSocialiteProviderLittleSkin;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LittleSkinExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('littleskin', __NAMESPACE__.'\Provider');
    }
}
