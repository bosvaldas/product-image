<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Payolution\Communication\Plugin\Checkout;

use Generated\Shared\Transfer\CheckoutRequestTransfer;
use Generated\Shared\Transfer\OrderTransfer;
use Spryker\Zed\Checkout\Dependency\Plugin\CheckoutOrderHydrationInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin as BaseAbstractPlugin;

class OrderHydrationPlugin extends BaseAbstractPlugin implements CheckoutOrderHydrationInterface
{

    /**
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     * @param \Generated\Shared\Transfer\CheckoutRequestTransfer $checkoutRequest
     *
     * @return void
     */
    public function hydrateOrder(OrderTransfer $orderTransfer, CheckoutRequestTransfer $checkoutRequest)
    {
        $orderTransfer->setPayolutionPayment($checkoutRequest->getPayolutionPayment());
    }

}
