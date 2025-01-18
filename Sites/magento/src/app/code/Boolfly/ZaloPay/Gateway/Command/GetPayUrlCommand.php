<?php
namespace Boolfly\ZaloPay\Gateway\Command;

use Boolfly\ZaloPay\Gateway\Validator\AbstractResponseValidator;
use Magento\Payment\Gateway\CommandInterface;
use Magento\Payment\Gateway\Http\ClientException;
use Magento\Payment\Gateway\Http\ClientInterface;
use Magento\Payment\Gateway\Command\CommandException;
use Magento\Payment\Gateway\Http\ConverterException;
use Magento\Payment\Gateway\Request\BuilderInterface;
use Magento\Payment\Gateway\Validator\ValidatorInterface;
use Magento\Payment\Gateway\Http\TransferFactoryInterface;

/**
 * Class GetPayUrlCommand
 *
 * @package Boolfly\ZaloPay\Gateway\Command
 */
class GetPayUrlCommand implements CommandInterface
{
    /**
     * @var BuilderInterface
     */
    private $requestBuilder;

    /**
     * @var TransferFactoryInterface
     */
    private $transferFactory;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * Constructor
     *
     * @param BuilderInterface         $requestBuilder
     * @param TransferFactoryInterface $transferFactory
     * @param ClientInterface          $client
     * @param ValidatorInterface       $validator
     */
    public function __construct(
        BuilderInterface $requestBuilder,
        TransferFactoryInterface $transferFactory,
        ClientInterface $client,
        ValidatorInterface $validator
    ) {
        $this->requestBuilder  = $requestBuilder;
        $this->transferFactory = $transferFactory;
        $this->client          = $client;
        $this->validator       = $validator;
    }

    /**
     * @param array $commandSubject
     * @return array|null
     * @throws CommandException
     * @throws ClientException
     * @throws ConverterException
     */
    public function execute(array $commandSubject)
    {
        // Build the transfer object
        $transferO = $this->transferFactory->create($this->buildRequestData($commandSubject));

        // Send the request via the client
        $response = $this->client->placeRequest($transferO);

        // Validate the response
        $result = $this->validator->validate(array_merge($commandSubject, ['response' => $response]));

        if (!$result->isValid()) {
            throw new CommandException(__(implode("\n", $result->getFailsDescription())));
        }

        // Check for the expected response key before returning it
        if (!isset($response[AbstractResponseValidator::PAY_URL])) {
            throw new CommandException(__('Invalid response from payment gateway.'));
        }

        // Return the pay URL in an array
        return [
            AbstractResponseValidator::PAY_URL => $response[AbstractResponseValidator::PAY_URL]
        ];
    }

    /**
     * @param array $commandSubject
     * @return array
     */
    public function buildRequestData(array $commandSubject)
    {
        return $this->requestBuilder->build($commandSubject);
    }
}
