<?php

interface PaymentProcessor
{
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool;
}

abstract class OnlinePaymentProcessor implements PaymentProcessor
{

    public function __construct(
        protected string $apiKey
    ) {}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executeRefund($amount);
    }
}

class StripeProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }
    protected function executePayment(float $amount): bool
    {
        echo "Processing Stripe payment of $amount\n";
        return true;
    }
    protected function executeRefund(float $amount): bool
    {
        echo "Processing Stripe refund of $amount\n";
        return true;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor
{
    protected function validateApiKey(): bool
    {
        return strlen($this->apiKey) === 32;
    }
    protected function executePayment(float $amount): bool
    {
        echo "Processing Paypal payment of $amount\n";
        return true;
    }
    protected function executeRefund(float $amount): bool
    {
        echo "Processing Paypal refund of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor
{
    public function processPayment(float $amount): bool
    {
        echo "Cash payment...";
        return true;
    }
    public function refundPayment(float $amount): bool
    {
        echo "Cash refund ...";
        return true;
    }
}

class OrderProcessor
{
    public function __construct(
        private PaymentProcessor $paymentProcessor
    ) {}

    public function processOrder(float $amount): void
    {
        //...
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function processRefund(float $amount): void
    {
        //...
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Refund processed successfully\n";
        } else {
            echo "Refund processing failed\n";
        }
    }
}

$stripeProcessor = new StripeProcessor("sk_test_1123412");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(100.00);

$stripeOrder->processRefund(100.00);
$paypalOrder->processRefund(100.00);
$cashOrder->processRefund(100.00);