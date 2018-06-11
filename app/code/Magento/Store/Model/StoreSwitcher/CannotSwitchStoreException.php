<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Store\Model\StoreSwitcher;

use Magento\Framework\Exception\RuntimeException;
use Magento\Framework\Phrase;

class CannotSwitchStoreException extends RuntimeException
{
    public function __construct(\Exception $cause = null, Phrase $phrase = null, int $code = 0)
    {
        parent::__construct($phrase ?: __('The store cannot be switched.'), $cause, $code);
    }

}
