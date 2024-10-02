<?php

namespace Dashopapp\Api\Models;

use Dashopapp\Base\Contracts\BaseModel;
use Dashopapp\Base\Models\Concerns\HasBaseEloquentBuilder;
use Dashopapp\Base\Models\Concerns\HasMetadata;
use Dashopapp\Base\Models\Concerns\HasUuidsOrIntegerIds;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken implements BaseModel
{
    use HasMetadata;
    use HasUuidsOrIntegerIds;
    use HasBaseEloquentBuilder;
}
