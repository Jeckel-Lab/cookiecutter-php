<?php

/**
 * @author: {{ cookiecutter.full_name }} <{{ cookiecutter.email }}>
 * Created at: {% now 'utc', '%Y-%m-%d' %}
 */

declare(strict_types=1);

namespace {{ cookiecutter.psr4_namespace }};

final class Placeholder
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function echo(string $value): string
    {
        return $this->prefix.$value;
    }
}
