<?php

/**
 * Mcash helps communicating with the Mobitel mCash ({@link http://www.mobitel.lk/mcash}) web service to accept payments.
 *
 * @author Saranga Abeykoon <amisaranga@gmail.com>
 * @link http://blog.nterms.com
 */

namespace Nterms\Mcash;

/**
 * Class Mcash
 */
class Mcash
{
    const IPG_MODE_TEST = 'Test';
    const IPG_MODE_LIVE = 'Live';

    /**
     * @var String $tokensUrl URL to be used to get the transaction token.
     */
    protected $tokensUrl = 'https://www.mcash.lk/ipg/auth/tokens.html';

    /**
     * @var String $paymentUrl URL to be used for redirecting user for payment.
     */
    protected $paymentUrl = 'https://ipg.mobitel.lk/mcash/payment.html';

    public function __construct($options = [])
    {
        # code...
    }

    public function getToken()
    {
        return 'test';
    }
}
