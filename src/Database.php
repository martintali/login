<?php
/**
 * This file is in charge of databases connections of the MartinTali\Login library.
 *
 * (c) Martin Daniel <martindaniel555@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Login
 * @author    Martin Daniel <martindaniel555@gmail.com>
 * @copyright 2016 Martin Daniel <martindaniel555@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT  MIT
 * @link      http://github.com/martintali/login
 */

namespace MartinTali\Login;

use \Doctrine\DBAL\Configuration;
use \Doctrine\DBAL\DriverManager;

/**
 * Definition class
 *
 * @category  PHP
 * @package   Login
 * @author    Martin Daniel <martindaniel555@gmail.com>
 * @copyright 2016 Martin Daniel <martindaniel555@gmail.com>
 * @license   http://www.opensource.org/licenses/MIT  MIT
 * @link      http://github.com/martintali/login
 */
class Database
{
    /**
     * Db connection instance
     */
    private static $_uniqueInstance = null;

    /**
     * Database constructor
     */
    protected function __construct()
    {
    }

    /**
     * Gets a db object instance using singleton
     *
     * @return db|Database
     */
    public static function getInstance()
    {
        if (self::$_uniqueInstance === null) {
            self::$_uniqueInstance = new Database();
        }

        return self::$_uniqueInstance;
    }

    /**
     * Prepares a db connection object
     *
     * @throws \Doctrine\DBAL\DBALException
     * @return \Doctrine\DBAL\Connection
     */
    public function getConnection()
    {

        $config = new Configuration();

        $connectionParams = array(
            'dbname' => 'login',
            'user' => 'root',
            'password' => 'wobiz',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        );

        try {
            $conn = DriverManager::getConnection($connectionParams, $config);
        } catch (\Exception $e) {
            die();
        }

        return $conn;
    }
}