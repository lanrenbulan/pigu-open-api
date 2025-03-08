<?php

declare(strict_types=1);

namespace Doubler\PiguOpenApi\Order;

use Doubler\PiguOpenApi\AbstractRequestBuilder;

class GetOrdersRequestBuilder extends AbstractRequestBuilder
{
    public function setOffset(int $offset): self
    {
        $this->queryParams['offset'] = $offset;

        return $this;
    }

    public function setLimit(int $limit): self
    {
        $this->queryParams['limit'] = $limit;
        
        return $this;
    }

    public function setId(int $id): self
    {
        $this->queryParams['id'] = $id;
        
        return $this;
    }

    public function setExternalId(int $externalId): self
    {
        $this->queryParams['external_id'] = $externalId;
        
        return $this;
    }

    public function setUserName(string $userName): self
    {
        $this->queryParams['user_name'] = $userName;
        
        return $this;
    }

    public function setUserLastName(strint $userLastName): self
    {
        $this->queryParams['user_last_name'] = $userLastName;
        
        return $this;
    }

    public function setReceiverName(string $receiverName): self
    {
        $this->queryParams['receiver_name'] = $receiverName;
        
        return $this;
    }

    public function setReceiverLastName(string $receiverLastName): self
    {
        $this->queryParams['receiver_last_name'] = $receiverLastName;
        
        return $this;
    }

    public function setSku(int $sku): self
    {
        $this->queryParams['sku'] = $sku;
        
        return $this;
    }

    public function setEan(string $ean): self
    {
        $this->queryParams['ean'] = $ean;
        
        return $this;
    }

    public function setPriceFrom(int $priceFrom): self
    {
        $this->queryParams['price_from'] = $printFrom;
        
        return $this;
    }

    public function setPrice(float $priceTo): self
    {
        $this->queryParams['price_to'] = $priceTo;
        
        return $this;
    }

    /**
     * submitted, open_incident, closed_incident, confirmed_later,
     * confirmed, processed, in_progress, shipping, completed, rejected, returned
     * 
     * @param string $paymentStatus
     */
    public function setOrderStatus(string $orderStatus): self
    {
        $this->queryParams['order_status'] = $orderStatus;
        
        return $this;
    }

    /**
     * @param string $paymentStatus paid, waiting, unpaid
     */
    public function setPaymentStatus(string $paymentStatus): self
    {
        $this->queryParams['payment_status'] = $paymentStatus;
        
        return $this;
    }

    /**
     * @param int $codOrder 0, 1
     */
    public function setCodOrder(int $codOrder): self
    {
        $this->queryParams['cod_order'] = $codOrder;
        
        return $this;
    }

    public function setAppName(string $appName): self
    {
        $this->queryParams['app_name'] = $appName;
        
        return $this;
    }

    public function setDeadlineFrom(string $deadlineFrom): self
    {
        $this->queryParams['deadline_from'] = $deadlineFrom;
        
        return $this;
    }

    public function setDeadlineTo(string $deadlineTo): self
    {
        $this->queryParams['deadline_to'] = $deadlineTo;
        
        return $this;
    }

    public function setCreatedAtFrom(string $createdAtFrom): self
    {
        $this->queryParams['created_at_from'] = $createdAtFrom;
        
        return $this;
    }
    
    public function setCreatedAtTo(string $createdAtTo): self
    {
        $this->queryParams['created_at_to'] = $createdAtTo;
        
        return $this;
    }

    public function setUpdatedAtFrom(string $updatedAtFrom): self
    {
        $this->queryParams['updated_at_from'] = $updatedAtFrom;
        
        return $this;
    }

    public function setUpdatedAtTo(string $updatedAtTo): self
    {
        $this->queryParams['updated_at_to'] = $updatedAtTo;
        
        return $this;
    }

    /**
     * @param string $orderByDirection asc, desc
     */
    public function setOrderByDirection(string $orderByDirection): self
    {
        $this->queryParams['order_by_direction'] = $id;
        
        return $this;
    }

    /**
     * @param string $type submitted, late, need_to_send, unpaid, open_incident, fbp_orders, incompleted
     */
    public function setType(strint $type): self
    {
        $this->queryParams['type'] = $type;
        
        return $this;
    }

    public function setInvoiceNo(string $invoiceNo): self
    {
        $this->queryParams['invoice_no'] = $invoiceNo;
        
        return $this;
    }

    public function setInvoiceCreatedAtFrom(int $invoiceCreatedAtFrom): self
    {
        $this->queryParams['invoice_created_at_from'] = $invoiceCreatedAtFrom;
        
        return $this;
    }

    public function setInvoiceCreatedAtTo(int $invoiceCreatedAtTo): self
    {
        $this->queryParams['invoice_created_at_to'] = $invoiceCreatedAtTo;
        
        return $this;
    }

    /**
     * @param string $saleDocumentDateTo Y-m-d H:i:s
     */
    public function setSaleDocumentDateFrom(string $saleDocumentDateFrom): self
    {
        $this->queryParams['sale_document_date_from'] = $saleDocumentDateFrom;
        
        return $this;
    }

    /**
     * @param string $saleDocumentDateTo Y-m-d H:i:s
     */
    public function setSaleDocumentDateTo(string $saleDocumentDateTo): self
    {
        $this->queryParams['sale_document_date_to'] = $saleDocumentDateTo;
        
        return $this;
    }

    public function setDeliveryId(string $deliveryId): self
    {
        $this->queryParams['delivery_id'] = $deliveryId;
        
        return $this;
    }

    public function setZeroVatOrder(bool $zeroVatOrder): self
    {
        $this->queryParams['zero_vat_order'] = $zeroVatOrder ? 'true' : 'false';
        
        return $this;
    }

    public function setIsCdOrderToFbp(bool $isCdOrderToFbp): self
    {
        $this->queryParams['is_cd_order_to_fbp'] = $isCdOrderToFbp ? 'true' : 'false';
        
        return $this;
    }
    
    protected function getApiPath(): string
    {
        return sprintf('/v3/sellers/%s/orders', $this->context->getSellerId());
    }
}