<?php
namespace Magento\MessageQueue\Console\StartConsumerCommand;

/**
 * Proxy class for @see \Magento\MessageQueue\Console\StartConsumerCommand
 */
class Proxy extends \Magento\MessageQueue\Console\StartConsumerCommand implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\MessageQueue\Console\StartConsumerCommand
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\MessageQueue\\Console\\StartConsumerCommand', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        if ($this->_subject) {
            $this->_subject = clone $this->_getSubject();
        }
    }

    /**
     * Debug proxied instance
     */
    public function __debugInfo()
    {
        return ['i' => $this->_subject];
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\MessageQueue\Console\StartConsumerCommand
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function ignoreValidationErrors()
    {
        return $this->_getSubject()->ignoreValidationErrors();
    }

    /**
     * {@inheritdoc}
     */
    public function setApplication(?\Symfony\Component\Console\Application $application = null)
    {
        return $this->_getSubject()->setApplication($application);
    }

    /**
     * {@inheritdoc}
     */
    public function setHelperSet(\Symfony\Component\Console\Helper\HelperSet $helperSet)
    {
        return $this->_getSubject()->setHelperSet($helperSet);
    }

    /**
     * {@inheritdoc}
     */
    public function getHelperSet() : ?\Symfony\Component\Console\Helper\HelperSet
    {
        return $this->_getSubject()->getHelperSet();
    }

    /**
     * {@inheritdoc}
     */
    public function getApplication() : ?\Symfony\Component\Console\Application
    {
        return $this->_getSubject()->getApplication();
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return $this->_getSubject()->isEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->_getSubject()->run($input, $output);
    }

    /**
     * {@inheritdoc}
     */
    public function complete(\Symfony\Component\Console\Completion\CompletionInput $input, \Symfony\Component\Console\Completion\CompletionSuggestions $suggestions) : void
    {
        $this->_getSubject()->complete($input, $suggestions);
    }

    /**
     * {@inheritdoc}
     */
    public function setCode(callable $code) : static
    {
        return $this->_getSubject()->setCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function mergeApplicationDefinition(bool $mergeArgs = true) : void
    {
        $this->_getSubject()->mergeApplicationDefinition($mergeArgs);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefinition(\Symfony\Component\Console\Input\InputDefinition|array $definition) : static
    {
        return $this->_getSubject()->setDefinition($definition);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefinition() : \Symfony\Component\Console\Input\InputDefinition
    {
        return $this->_getSubject()->getDefinition();
    }

    /**
     * {@inheritdoc}
     */
    public function getNativeDefinition() : \Symfony\Component\Console\Input\InputDefinition
    {
        return $this->_getSubject()->getNativeDefinition();
    }

    /**
     * {@inheritdoc}
     */
    public function addArgument(string $name, ?int $mode = null, string $description = '', mixed $default = null) : static
    {
        return $this->_getSubject()->addArgument($name, $mode, $description, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function addOption(string $name, string|array|null $shortcut = null, ?int $mode = null, string $description = '', mixed $default = null) : static
    {
        return $this->_getSubject()->addOption($name, $shortcut, $mode, $description, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string $name) : static
    {
        return $this->_getSubject()->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setProcessTitle(string $title) : static
    {
        return $this->_getSubject()->setProcessTitle($title);
    }

    /**
     * {@inheritdoc}
     */
    public function getName() : ?string
    {
        return $this->_getSubject()->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setHidden(bool $hidden = true) : static
    {
        return $this->_getSubject()->setHidden($hidden);
    }

    /**
     * {@inheritdoc}
     */
    public function isHidden() : bool
    {
        return $this->_getSubject()->isHidden();
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(string $description) : static
    {
        return $this->_getSubject()->setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() : string
    {
        return $this->_getSubject()->getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function setHelp(string $help) : static
    {
        return $this->_getSubject()->setHelp($help);
    }

    /**
     * {@inheritdoc}
     */
    public function getHelp() : string
    {
        return $this->_getSubject()->getHelp();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedHelp() : string
    {
        return $this->_getSubject()->getProcessedHelp();
    }

    /**
     * {@inheritdoc}
     */
    public function setAliases(iterable $aliases) : static
    {
        return $this->_getSubject()->setAliases($aliases);
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases() : array
    {
        return $this->_getSubject()->getAliases();
    }

    /**
     * {@inheritdoc}
     */
    public function getSynopsis(bool $short = false) : string
    {
        return $this->_getSubject()->getSynopsis($short);
    }

    /**
     * {@inheritdoc}
     */
    public function addUsage(string $usage) : static
    {
        return $this->_getSubject()->addUsage($usage);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsages() : array
    {
        return $this->_getSubject()->getUsages();
    }

    /**
     * {@inheritdoc}
     */
    public function getHelper(string $name) : mixed
    {
        return $this->_getSubject()->getHelper($name);
    }
}
