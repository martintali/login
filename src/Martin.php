<?php
/**
 * This file is part of the MartinTali\Login library.
 *
 * (c) Martin Daniel <martindaniel555@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   CodeCoverage
 * @author    Martin Daniel <martindaniel555@gmail.com>
 * @copyright 2016 Martin Daniel <martindaniel555@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT  MIT
 * @link      http://github.com/martintali/login
 */

namespace MartinTali\Login;

use \MartinTali\Login\Database;
/**
 * Definition class
 *
 * @category  PHP
 * @package   CodeCoverage
 * @author    Martin Daniel <martindaniel555@gmail.com>
 * @copyright 2016 Martin Daniel <martindaniel555@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT  MIT
 * @link      http://github.com/martintali/login
 */
class Martin
{

    /**
     * Checks if we have cheese
     *
     * @param boolean $bool Do we have cheese?
     *
     * @return bool
     */
    public function hasCheese($bool = true)
    {
        return $bool;
    }

    /**
     * Checks if we are connected to the databse
     *
     * @return \Doctrine\DBAL\Connection
     */
    public function isConnected()
    {
        return Database::getInstance()->getConnection();
    }
}
