<?php namespace AluisioPires\SwaggerDocs\Formatters;

use AluisioPires\SwaggerDocs\Exceptions\ExtensionNotLoaded;

/**
 * Class AbstractFormatter
 * @package AluisioPires\SwaggerDocs\Formatters
 */
abstract class AbstractFormatter {

    /**
     * Documentation array
     * @var array
     */
    protected array $documentation;

    /**
     * Formatter constructor.
     * @param array $documentation
     */
    public function __construct(array $documentation) {
        $this->documentation = $documentation;
    }

    /**
     * Format documentation
     * @return string
     * @throws ExtensionNotLoaded
     */
    abstract public function format(): string;

}
