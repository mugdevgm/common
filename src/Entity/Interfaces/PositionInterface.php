<?php

namespace Mugdev\Common\Entity\Interfaces;

interface PositionInterface
{
    public function getPosition(): ?int;

    public function setPosition(?int $position): self;
}
