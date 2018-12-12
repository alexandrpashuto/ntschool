<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 11.12.2018
 * Time: 20:42
 */

namespace NtSchool\Loggers;


interface LoggerInterface
{

    public function error(string  $message);

    public function warning(string $message);
}