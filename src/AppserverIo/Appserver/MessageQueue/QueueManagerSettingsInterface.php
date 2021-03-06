<?php

/**
 * \AppserverIo\Appserver\MessageQueue\QueueManagerSettingsInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Appserver\MessageQueue;

use AppserverIo\Appserver\Application\Interfaces\ManagerSettingsInterface;

/**
 * Interface MQ configuration settings.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */
interface QueueManagerSettingsInterface extends ManagerSettingsInterface
{

    /**
     * The name of the PMS client configuration properties file.
     *
     * @var string
     */
    const CONFIGURATION_FILE = 'pms-client.properties';

    /**
     * Returns the maximum number of jobs to process in parallel.
     *
     * @return integer
     */
    public function getMaximumJobsToProcess();
}
