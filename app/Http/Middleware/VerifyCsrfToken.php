<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'updateDelivery',
        '/updateDelivery',
        'open',
        '/open',
        'addTicket',
        '/addTicket',
        '/api/stats',
        'api/stats',
        '/api/last',
        'api/last',
        '/sale',
        'getPayment',
        '/getPayment',
        'sale',
        'deliver',
        '/deliver',
        'activate',
        '/activate'
    ];
}
