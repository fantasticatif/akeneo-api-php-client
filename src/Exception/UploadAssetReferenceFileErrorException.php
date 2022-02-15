<?php

declare(strict_types=1);

namespace Akeneo\Pim\ApiClient\Exception;

/**
 * Exception thrown when one or more errors occurred during the upload of an asset reference file.
 * The most likely case is that the reference has been uploaded, but some variation files were not generated properly.
 *
 * @author    Laurent Petard <laurent.petard@akeneo.com>
 * @copyright 2017 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class UploadAssetReferenceFileErrorException extends RuntimeException
{
    /** @var array */
    private $errors;

    /**
     * @param string $message
     * @param array  $errors
     */
    public function __construct($message, array $errors)
    {
        parent::__construct($message);

        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
