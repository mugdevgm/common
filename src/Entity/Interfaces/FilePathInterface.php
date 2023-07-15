<?php

namespace Mugdev\Common\Entity\Interfaces;

interface FilePathInterface
{
    public function getPath(): ?string;

    public function setPath(?string $path): self;
}