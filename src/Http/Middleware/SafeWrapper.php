<?php

namespace Sun\EpayAlfa\Http\Middleware;

use Closure;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Sun\BelAssist\Exceptions\Request\InternalBelAssistError;
use Sun\EpayAlfa\Exceptions\Request\ResponsableThrowable;
use Throwable;

class SafeWrapper
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws InternalBelAssistError
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (ResponsableThrowable $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new InternalBelAssistError($exception);
        }
    }
}
