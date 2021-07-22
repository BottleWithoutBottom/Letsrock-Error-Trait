<?php

namespace Letsrock;

trait TextErrorTrait
{
    protected $textErrors = [];

    public function addError(string $errorText): bool
    {
        if (empty($errorText)) return false;

        $this->textErrors[] = $errorText;

        return true;
    }

    public function addErrors(array $errors) : bool
    {
        if (empty($errors)) return false;

        $this->textErrors = array_merge($errors, $this->textErrors);

        return true;
    }

    public function getLastError(): string
    {
        if (empty($this->textErrors)) return false;

        return $this->textErrors[count($this->textErrors) - 1];
    }

    public function getErrors(): array
    {
        return $this->textErrors;
    }

    public function errorsToString(): string
    {
        return implode(', ', $this->textErrors);
    }

    public function emptyErrors(): bool
    {
        return (empty($this->textErrors));
    }
}