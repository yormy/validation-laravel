<?php

namespace Yormy\ValidationLaravel\Observers\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExtensionInconsistentEvent
{
    use Dispatchable;
    use SerializesModels;

    protected string $filename;

    private string $code = "EXTENSION_INCONSISTENT";

    private string $severity = "medium";

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getSeverity()
    {
        return $this->severity;
    }
}
