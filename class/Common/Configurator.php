<?php

declare(strict_types=1);

namespace XoopsModules\xoopssecure\Common;

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Configurator Class
 * Module:  Xoopssecure
 *
 * @author    Michael Albertsen
 * @since     21.11.2022
 * @copyright Michael Albertsen culex@culex.dk
 * @version   1.1
 * @license   GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 */

/**
 * Class Configurator
 */
class Configurator
{
    public $name;
    public $paths           = [];
    public $uploadFolders   = [];
    public $copyBlankFiles  = [];
    public $copyTestFolders = [];
    public $templateFolders = [];
    public $oldFiles        = [];
    public $oldFolders      = [];
    public $renameTables    = [];
    public $moduleStats     = [];
    public $modCopyright;

    /**
     * Configurator constructor.
     */
    public function __construct()
    {
        $config = include \dirname(__DIR__, 2) . '/config/config.php';

        $this->name            = $config->name;
        $this->paths           = $config->paths;
        $this->uploadFolders   = $config->uploadFolders;
        $this->copyBlankFiles  = $config->copyBlankFiles;
        $this->copyTestFolders = $config->copyTestFolders;
        $this->templateFolders = $config->templateFolders;
        $this->oldFiles        = $config->oldFiles;
        $this->oldFolders      = $config->oldFolders;
        $this->renameTables    = $config->renameTables;
        $this->moduleStats     = $config->moduleStats;
        $this->modCopyright    = $config->modCopyright;
    }
}
