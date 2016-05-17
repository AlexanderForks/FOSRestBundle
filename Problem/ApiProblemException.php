<?php

namespace FOS\Restbundle\Problem;

use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * @author Alexandru Furculita <alex@furculita.net>
 */
class ApiProblemException extends HttpException
{
    /**
     * @var ApiProblem
     */
    private $problem;

    public function __construct(ApiProblem $problem, \Exception $previous = null, array $headers = [], $code = 0)
    {
        $this->problem = $problem;

        parent::__construct($problem->getStatus(), $problem->getTitle(), $previous, $headers, $code);
    }

    /**
     * @return ApiProblem
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * @return array
     */
    public function getNormalizedProblem()
    {
        return $this->problem->toArray();
    }
}
