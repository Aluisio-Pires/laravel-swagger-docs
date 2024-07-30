<?php namespace AluisioPires\SwaggerDocs\Parameters\Interfaces;

/**
 * Interface ParametersGenerator
 * @package AluisioPires\SwaggerDocs\Parameters\Interfaces
 */
interface ParametersGenerator {

    /**
     * Get list of parameters
     * @return array
     */
    public function getParameters(): array;

    /**
     * Get parameter location
     * @return string
     */
    public function getParameterLocation(): string;

}
