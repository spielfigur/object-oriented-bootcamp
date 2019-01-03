<?php

class Mother
{
    public function getEyeCount()
    {
        return $this->eye_count = 2;
    }
}

class child extends Mother
{
}

echo (new Child)->getEyeCount();
