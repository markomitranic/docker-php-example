<?php
declare(strict_types=1);

namespace App;

use Psr\Log\LoggerInterface;

class Controller
{

    private LoggerInterface $logger;

    public function __construct(
        LoggerInterface $logger
    ) {
      $this->logger = $logger;
    }

    public function index(): void
    {
        $marko = new Person('Marko',  'Mitranic');

        $this->logger->critical(
            sprintf('Here it is! A critical message from %s!', $marko->getFullName()),
        );

        phpinfo();
    }

}
