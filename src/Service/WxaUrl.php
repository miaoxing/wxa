<?php

namespace Miaoxing\Wxa\Service;

use Miaoxing\Plugin\BaseService;
use Wei\Url;

/**
 * @property Url url
 */
class WxaUrl extends BaseService
{
    public function __invoke($url, $page = '/pages/index/index')
    {
        return $this->url->append($page, [
            'url' => $this->url->full($url)
        ]);
    }
}
