<?php

/**
 * Benchmarking test for XoopsSecure
 *
 * Tools for doing timed benchmarking
 *
 * @author    Michael Albertsen
 * @since     21.11.2022
 * @copyright Michael Albertsen culex@culex.dk
 * @version   1.1
 * @license   GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 */

namespace XoopsModules\Xoopssecure;

use XoopsModules\Xoopssecure;
use XoopsModules\Xoopssecure\Constants;
use XoopsModules\Xoopssecure\Db;

if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}
set_time_limit(999999);

/**
 * Using Bench
 *
 * This class will do benchmarking of xoops functions and vanilla php functions
 * The idea is to get an idea which functions work fastest on individual server
 *
 * @author    Michael Albertsen <culex@culex.dk>
 * @since     21.11.2022
 * @copyright Michael Albertsen culex@culex.dk
 * @version   1.1
 * @license   GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 */
class Bench extends Mech
{
    //var $userdatetype;
    public $helper;
    public $start = [];
    public $end = [];
    public $totalTime = [];
    
    public function __construct()
    {
        //$this->userdatetype = xoopssecure_GetModuleOption('dateformat');
    }

    /** 
     * Start the clock
     *
     */
    public function start()
    {
        $this->start[] = microtime(true);
    }

    /** 
     *Stop the clock
     *
     */
    public function end()
    {
        $this->end[] = microtime(true);
        self::getTotal();
    }

    /** 
     * Sumup time
     *
     */
    public function getTotal()
    {
        $i = 0;
        for ($i = 0, $iMax = count($this->start); $i < $iMax; $i++) {
            $this->totalTime[$i] = $this->end[$i] - $this->start[$i];
        }
    }
}
