<?php

namespace Farzai\Thorakhong\Contracts;

interface MessageRepositoryInterface
{
    public function save(MessageEntityInterface $message): void;

    public function findById(string $id): MessageEntityInterface;
}