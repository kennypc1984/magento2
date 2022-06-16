<?php declare(strict_types=1);

namespace Vendor\ModuleName\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;

class ModuleConfig
{
    private const MODULENAME_VALUE = 'vendor/moduleName/value';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }
    
    public function getToken(): string
    {
        return $this->scopeConfig->getValue(self::MODULENAME_VALUE);
    }    

    
}
