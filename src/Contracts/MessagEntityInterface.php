<?php

namespace Farzai\Thorakhong\Contracts;

interface MessageEntityInterface
{
    public function getId(): string;

    public function getType(): string;

    public function getContent(): string;
}
