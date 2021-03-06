<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;

class RequestHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     */
    protected $specVersion = '1.2';

    /**
     * @var string
     * @SerializedName("CustomerId")
     */
    protected $customerId;

    /**
     * @var string
     * @SerializedName("RequestId")
     */
    protected $requestId;

    /**
     * @var int
     * @SerializedName("RetryIndicator")
     */
    protected $retryIndicator = 0;

    public function getSpecVersion(): string
    {
        return $this->specVersion;
    }

    public function setSpecVersion(string $specVersion): self
    {
        $this->specVersion = $specVersion;

        return $this;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): self
    {
        $this->requestId = $requestId;

        return $this;
    }

    public function getRetryIndicator(): int
    {
        return $this->retryIndicator;
    }

    public function setRetryIndicator(int $retryIndicator): self
    {
        $this->retryIndicator = $retryIndicator;

        return $this;
    }
}
