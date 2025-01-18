<?php
namespace Magento\AdminAdobeIms\Console\Command\AdminAdobeImsDisableCommand;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsDisableCommand
 */
class Interceptor extends \Magento\AdminAdobeIms\Console\Command\AdminAdobeImsDisableCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList)
    {
        $this->___init();
        parent::__construct($adminImsConfig, $cacheTypeList);
    }

    /**
     * {@inheritdoc}
     */
    public function ignoreValidationErrors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ignoreValidationErrors');
        return $pluginInfo ? $this->___callPlugins('ignoreValidationErrors', func_get_args(), $pluginInfo) : parent::ignoreValidationErrors();
    }

    /**
     * {@inheritdoc}
     */
    public function setApplication(?\Symfony\Component\Console\Application $application = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setApplication');
        return $pluginInfo ? $this->___callPlugins('setApplication', func_get_args(), $pluginInfo) : parent::setApplication($application);
    }

    /**
     * {@inheritdoc}
     */
    public function setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHelperSet');
        return $pluginInfo ? $this->___callPlugins('setHelperSet', func_get_args(), $pluginInfo) : parent::setHelperSet($helperSet);
    }

    /**
     * {@inheritdoc}
     */
    public function getHelperSet() : ?\Symfony\Component\Console\Helper\HelperSet
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelperSet');
        return $pluginInfo ? $this->___callPlugins('getHelperSet', func_get_args(), $pluginInfo) : parent::getHelperSet();
    }

    /**
     * {@inheritdoc}
     */
    public function getApplication() : ?\Symfony\Component\Console\Application
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApplication');
        return $pluginInfo ? $this->___callPlugins('getApplication', func_get_args(), $pluginInfo) : parent::getApplication();
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        return $pluginInfo ? $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo) : parent::isEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }

    /**
     * {@inheritdoc}
     */
    public function complete(\Symfony\Component\Console\Completion\CompletionInput $input, \Symfony\Component\Console\Completion\CompletionSuggestions $suggestions) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'complete');
        $pluginInfo ? $this->___callPlugins('complete', func_get_args(), $pluginInfo) : parent::complete($input, $suggestions);
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(callable $code) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCode');
        return $pluginInfo ? $this->___callPlugins('setCode', func_get_args(), $pluginInfo) : parent::setCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function mergeApplicationDefinition(bool $mergeArgs = true) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeApplicationDefinition');
        $pluginInfo ? $this->___callPlugins('mergeApplicationDefinition', func_get_args(), $pluginInfo) : parent::mergeApplicationDefinition($mergeArgs);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefinition(\Symfony\Component\Console\Input\InputDefinition|array $definition) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefinition');
        return $pluginInfo ? $this->___callPlugins('setDefinition', func_get_args(), $pluginInfo) : parent::setDefinition($definition);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \Symfony\Component\Console\Input\InputDefinition
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefinition');
        return $pluginInfo ? $this->___callPlugins('getDefinition', func_get_args(), $pluginInfo) : parent::getDefinition();
    }

    /**
     * {@inheritdoc}
     */
    public function getNativeDefinition() : \Symfony\Component\Console\Input\InputDefinition
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNativeDefinition');
        return $pluginInfo ? $this->___callPlugins('getNativeDefinition', func_get_args(), $pluginInfo) : parent::getNativeDefinition();
    }

    /**
     * {@inheritdoc}
     */
    public function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addArgument');
        return $pluginInfo ? $this->___callPlugins('addArgument', func_get_args(), $pluginInfo) : parent::addArgument($name, $mode, $description, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function addOption(string $name, string|array|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOption');
        return $pluginInfo ? $this->___callPlugins('addOption', func_get_args(), $pluginInfo) : parent::addOption($name, $shortcut, $mode, $description, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string $name) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessTitle(string $title) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProcessTitle');
        return $pluginInfo ? $this->___callPlugins('setProcessTitle', func_get_args(), $pluginInfo) : parent::setProcessTitle($title);
    }

    /**
     * {@inheritdoc}
     */
    public function getName() : ?string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setHidden(bool $hidden = true) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHidden');
        return $pluginInfo ? $this->___callPlugins('setHidden', func_get_args(), $pluginInfo) : parent::setHidden($hidden);
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isHidden');
        return $pluginInfo ? $this->___callPlugins('isHidden', func_get_args(), $pluginInfo) : parent::isHidden();
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(string $description) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        return $pluginInfo ? $this->___callPlugins('setDescription', func_get_args(), $pluginInfo) : parent::setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function setHelp(string $help) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHelp');
        return $pluginInfo ? $this->___callPlugins('setHelp', func_get_args(), $pluginInfo) : parent::setHelp($help);
    }

    /**
     * {@inheritdoc}
     */
    public function getHelp() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelp');
        return $pluginInfo ? $this->___callPlugins('getHelp', func_get_args(), $pluginInfo) : parent::getHelp();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedHelp() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedHelp');
        return $pluginInfo ? $this->___callPlugins('getProcessedHelp', func_get_args(), $pluginInfo) : parent::getProcessedHelp();
    }

    /**
     * {@inheritdoc}
     */
    public function setAliases(iterable $aliases) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAliases');
        return $pluginInfo ? $this->___callPlugins('setAliases', func_get_args(), $pluginInfo) : parent::setAliases($aliases);
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAliases');
        return $pluginInfo ? $this->___callPlugins('getAliases', func_get_args(), $pluginInfo) : parent::getAliases();
    }

    /**
     * {@inheritdoc}
     */
    public function getSynopsis(bool $short = false) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSynopsis');
        return $pluginInfo ? $this->___callPlugins('getSynopsis', func_get_args(), $pluginInfo) : parent::getSynopsis($short);
    }

    /**
     * {@inheritdoc}
     */
    public function addUsage(string $usage) : static
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUsage');
        return $pluginInfo ? $this->___callPlugins('addUsage', func_get_args(), $pluginInfo) : parent::addUsage($usage);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsages() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsages');
        return $pluginInfo ? $this->___callPlugins('getUsages', func_get_args(), $pluginInfo) : parent::getUsages();
    }

    /**
     * {@inheritdoc}
     */
    public function getHelper(string $name) : mixed
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHelper');
        return $pluginInfo ? $this->___callPlugins('getHelper', func_get_args(), $pluginInfo) : parent::getHelper($name);
    }
}
