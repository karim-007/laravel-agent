<?php

namespace Karim007\LaravelAgent\Facade;
use Illuminate\Support\Facades\Facade;

class Agent extends Facade
{
    /**
     * Get the registered name of the component.
     * @method static getRules()
     * @method static getCrawlerDetect()
     * @method static getBrowsers()
     * @method static getOperatingSystems()
     * @method static getPlatforms()
     * @method static getDesktopDevices()
     * @method static getProperties()
     * @method static languages($acceptLanguage = null)
     * @method static browser($userAgent = null)
     * @method static platform($userAgent = null)
     * @method static device($userAgent = null)
     * @method static isDesktop($userAgent = null, $httpHeaders = null)
     * @method static isPhone($userAgent = null, $httpHeaders = null)
     * @method static robot($userAgent = null)
     * @method static isRobot($userAgent = null)
     * @method static deviceType($userAgent = null, $httpHeaders = null)
     *
     */
    protected static function getFacadeAccessor()
    {
        return 'agent';
    }
}
