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

    public function processPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return true;
    }

    public function refundPayment(float $amount): bool
    {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return true;
    }
}

class StripeProcessor extends OnlinePaymentProcessor 
{
    protected function validateApiKey(): bool 
    {
        return strpos($this->apiKey, 'sk_') === 0;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor 
{
    protected function validateApiKey(): bool 
    {
        return strlen($this->apiKey, 'sk_') === 32;

    }
}

$processor = new StripeProcessor("sk_");
$processor->processPayment(500);
