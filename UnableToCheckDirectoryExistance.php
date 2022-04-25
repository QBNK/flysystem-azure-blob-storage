<?php

declare(strict_types=1);

namespace League\Flysystem\AzureBlobStorage;

use League\Flysystem\UnableToCheckFileExistence;

class UnableToCheckDirectoryExistence extends UnableToCheckFileExistence
{
    public function operation(): string
    {
        return 'DIRECTORY_EXISTS';
    }
}