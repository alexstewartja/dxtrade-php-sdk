<?php

namespace AlexStewartJa\DXtrade\Resources\Administrative;

use AlexStewartJa\DXtrade\Exceptions\DXtradeException;
use AlexStewartJa\DXtrade\Models\Administrative\Adjustment;
use AlexStewartJa\DXtrade\Models\Administrative\Deposit;
use AlexStewartJa\DXtrade\Models\Administrative\ErrorDescription;
use AlexStewartJa\DXtrade\Models\Administrative\Withdrawal;
use AlexStewartJa\DXtrade\Resources\SubResource;

class CashTransfersResource extends SubResource
{
    /**
     * Create account adjustment for specified account
     * Adjustment currency should be the same as account currency. If amount of adjustment is negative and more than available 'withdrawable amount', then request is rejected.
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $id  unique identifier of the adjustment generated at the client side
     *
     * @throws DXtradeException
     */
    public function createAdjustment(
        string $clearingCode,
        string $accountCode,
        string $id,
        Adjustment $adjustment
    ): Adjustment|ErrorDescription {
        $response = $this->request(
            'put',
            "/api/register/account/{$clearingCode}/{$accountCode}/adjustment/{$id}",
            $adjustment->toArray()
        );

        return is_array($response) ? new Adjustment($response) : $response;
    }

    /**
     * Create account deposit
     * Deposit currency should be the same as account currency
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $id  unique identifier of the deposit generated at the client side
     *
     * @throws DXtradeException
     */
    public function createDeposit(
        string $clearingCode,
        string $accountCode,
        string $id,
        Deposit $deposit
    ): Deposit|ErrorDescription {
        $response = $this->request(
            'put',
            "/api/register/account/{$clearingCode}/{$accountCode}/deposit/{$id}",
            $deposit->toArray()
        );

        return is_array($response) ? new Deposit($response) : $response;
    }

    /**
     * Create account withdrawal for specified account
     * Withdrawal currency should be the same as account currency. If amount to withdraw is more than available 'withdrawable amount', then request is rejected.
     *
     * @param  string  $clearingCode  account clearing code
     * @param  string  $accountCode  account code
     * @param  string  $id  unique identifier of the withdrawal generated at the client side
     *
     * @throws DXtradeException
     */
    public function createWithdrawal(
        string $clearingCode,
        string $accountCode,
        string $id,
        Withdrawal $withdrawal
    ): Withdrawal|ErrorDescription {
        $response = $this->request(
            'PUT',
            "/api/register/account/{$clearingCode}/{$accountCode}/withdrawal/{$id}",
            $withdrawal->toArray()
        );

        return is_array($response) ? new Withdrawal($response) : $response;
    }
}
