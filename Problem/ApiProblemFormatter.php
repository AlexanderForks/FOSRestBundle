<?php

namespace FOS\Restbundle\Problem;

use FOS\Restbundle\Exception\Formatter\ExceptionFormatterInterface;

/**
 * @author Alexandru Furculita <alex@furculita.net>
 */
class ApiProblemFormatter implements ExceptionFormatterInterface
{
    /**
     * Formats an exception.
     *
     * @param \Exception $exception An exception to format
     *
     * @return array The formatted exception
     */
    public function format(\Exception $exception)
    {
        // TODO: Implement format() method.
    }
}