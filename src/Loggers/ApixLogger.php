<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 11.12.2018
 * Time: 20:47
 */

namespace NtSchool\Loggers;

use \Apix\Log\Logger\File;

class ApixLogger implements LoggerInterface
{
    /** @var \Apix\Log\Logger\File */
    protected $logger;

    public function __construct(File $loggers)
    {
        $this->logger = $loggers;
    }

    public function error(string $message)
    {
        $this->logger->error($message);
    }


    public function warning(string $message)
    {
        $this->logger->warning($message);
    }
}