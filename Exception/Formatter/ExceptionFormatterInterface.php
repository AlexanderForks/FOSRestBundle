<?php

namespace FOS\Restbundle\Exception\Formatter;

/**
 * Interface for exception formatters
 *
 * @author Alexandru Furculita <alex@furculita.net>
 */
interface ExceptionFormatterInterface
{
    /**
     * Formats an exception.
     *
     * @param \Exception $exception An exception to format
     *
     * @return array The formatted exception
     */
    public function format(\Exception $exception);

    /**
     * @param \Exception $exception
     *
     * @return bool
     */
    public function supports(\Exception $exception);
}
