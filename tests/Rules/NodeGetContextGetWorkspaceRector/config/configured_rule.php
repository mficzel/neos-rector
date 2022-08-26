<?php

declare (strict_types=1);
//namespace RectorPrefix202208;

use Neos\Rector\Rules\NodeGetContextGetWorkspaceRector;
use Rector\Config\RectorConfig;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->rule(NodeGetContextGetWorkspaceRector::class);
};