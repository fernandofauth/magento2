<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Config\Test\TestCase;

use Magento\Mtf\TestCase\Injectable;
use Magento\Config\Test\Page\Adminhtml\AdminAccountSharing;

/**
 * Steps:
 * 1. Log in to Admin.
 * 2. Go to Stores>Configuration>Advanced>admin>Security.
 * 3. * 7. Verify admin Acoount Sharing option availability.
 *
 * @group Config_(PS)
 * @ZephyrId MAGETWO-47822
 */
class VerifyAdminAccountSharingEntityTest extends Injectable
{
    /* tags */
    const MVP = 'yes';
    const DOMAIN = 'PS';
    const TEST_TYPE = 'extended_acceptance_test';
    /* end tags */

    /**
     * Admin account settings page.
     *
     * @var adminAccountSharing
     */
    private $adminAccountSharing;

    /**
     * @param AdminAccountSharing $adminAccountSharing
     */
    public function __inject(
        AdminAccountSharing $adminAccountSharing
    ) {
        $this->adminAccountSharing = $adminAccountSharing;
    }

    /**
     * Create Verify Admin Account Sharing test.
     *
     * @return void
     */
    public function test()
    {
        $this->adminAccountSharing->open();
        sleep(10);
    }
}
