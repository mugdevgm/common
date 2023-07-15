<?php

namespace Mugdev\Common\Entity\Interfaces;

interface ChangeDataDayInterface
{
    public function getCreatedAt(): ?\DateTimeInterface;
    public function setCreatedAt(?\DateTimeInterface $createdAt): self;

    public function getUpdatedAt(): ?\DateTimeInterface;
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self;
}