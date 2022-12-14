<?php
namespace Tuan\Fixably\Model\DataProvider;

use Tuan\Fixably\Http\Service\HttpWrapper;

abstract class AbstractDataProvider
{
    protected HttpWrapper $httpWrapper;

    public function __construct(
    ) {
        $this->httpWrapper = new HttpWrapper();
    }

    abstract public function getData(): array;

    protected function getTotalPageNum(int $total): int
    {
        return (int)\ceil($total / 10);
    }
}