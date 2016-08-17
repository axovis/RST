<?php

namespace Gregwar\RST;

class ErrorManager
{
    protected $abort = true;

    protected $outputErrorMessage = false;

    public function abortOnError($abort)
    {
        $this->abort = $abort;
    }

    public function setOutputErrorMessage($outputErrorMessage)
    {
        $this->outputErrorMessage = $outputErrorMessage;
    }

    public function error($message)
    {
        if ($this->abort) {
            throw new \Exception($message);
        } else {
            if($this->outputErrorMessage) {
                echo '/!\\ '.$message."\n";
            }
        }
    }
}
