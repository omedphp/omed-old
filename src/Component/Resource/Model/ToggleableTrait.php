<?php

namespace Omed\Component\Resource\Model;

trait ToggleableTrait
{
    protected bool $enabled = true;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function enable(): void
    {
        $this->setEnabled(true);
    }

    public function disable(): void
    {
        $this->setEnabled(false);
    }
}