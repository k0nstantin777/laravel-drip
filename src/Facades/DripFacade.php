<?php
namespace wouterNL\Drip\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use wouterNL\Drip\DripPhp;

/**
 * Class DripFacade
 * @method static array getCampaigns(array $params)
 * @method static array|bool fetchCampaign(array $params)
 * @method static array|bool getAccounts()
 * @method static bool deleteSubscriber(array $params)
 * @method static array|bool createOrUpdateSubscriber(array $params)
 * @method static bool batchCreateOrUpdateSubscribers(array $params)
 * @method static array|bool createOrUpdateOrders(array $params)
 * @method static array|bool fetchSubscriber(array $params)
 * @method static array|bool subscribeSubscriber(array $params)
 * @method static array|bool unsubscribeSubscriber(array $params)
 * @method static bool tagSubscriber(array $params)
 * @method static bool untagSubscriber(array $params)
 * @method static bool recordEvent(array $params)
 * @method static array makeRequest($url, $params = array(), $req_method = DripPhp::GET)
 *
 * @package wouterNL\Drip\Facades
 */
class DripFacade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'Drip';
    }
}
