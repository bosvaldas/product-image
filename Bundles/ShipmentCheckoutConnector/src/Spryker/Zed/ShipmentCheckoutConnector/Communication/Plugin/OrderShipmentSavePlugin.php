<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ShipmentCheckoutConnector\Communication\Plugin;

use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\OrderTransfer;
use Spryker\Zed\Checkout\Dependency\Plugin\CheckoutSaveOrderInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\ShipmentCheckoutConnector\Business\ShipmentCheckoutConnectorFacade getFacade()
 * @method \Spryker\Zed\ShipmentCheckoutConnector\Communication\ShipmentCheckoutConnectorCommunicationFactory getFactory()
 */
class OrderShipmentSavePlugin extends AbstractPlugin implements CheckoutSaveOrderInterface
{

    /**
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     * @param \Generated\Shared\Transfer\CheckoutResponseTransfer $checkoutResponse
     *
     * @return void
     */
    public function saveOrder(OrderTransfer $orderTransfer, CheckoutResponseTransfer $checkoutResponse)
    {
        $this->getFacade()->saveShipmentForOrder($orderTransfer, $checkoutResponse);
    }

}
