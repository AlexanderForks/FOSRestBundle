<?php

namespace FOS\Restbundle\Exception\Formatter;

/**
 * @author Alexandru Furculita <alex@furculita.net>
 */
class DefaultExceptionFormatter implements ExceptionFormatterInterface
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

    /**
     * @param \Exception $exception
     *
     * @return bool
     */
    public function supports(\Exception $exception)
    {
        // TODO: Implement supportsExceptionType() method.
    }
}
