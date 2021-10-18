<?php

namespace Sun\EpayAlfa\Exceptions\Request;

use Illuminate\Contracts\Support\Responsable;
use Throwable;

interface ResponsableThrowable extends Responsable, Throwable
{
}
