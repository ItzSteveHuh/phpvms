<?php

namespace App\Models\Enums;

use App\Interfaces\Enum;

/**
 * Class AcarsType
 * @package App\Models\Enums
 */
class AcarsType extends Enum
{
    public const FLIGHT_PATH = 0;
    public const ROUTE = 1;
    public const LOG = 2;
}
