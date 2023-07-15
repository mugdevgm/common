<?php

namespace Mugdev\Common\Entity\Traits;

trait PositionTrait
{
    private ?int $position = null;
    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;
        return $this;
    }
}