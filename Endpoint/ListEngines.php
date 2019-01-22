<?php
/**
 * This file is part of the Swiftype App Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\AppSearch\Endpoint;

/**
 * Implementation of the  endpoint.
 *
 * @package Swiftype\AppSearch\Endpoint
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 */
class ListEngines extends AbstractEndpoint
{
    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $uri = '/engines';

    protected $routeParams    = [];

    protected $paramWhitelist = ['page.current', 'page.size'];
}