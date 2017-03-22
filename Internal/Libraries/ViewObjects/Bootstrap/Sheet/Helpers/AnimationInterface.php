<?php namespace ZN\ViewObjects\Bootstrap\Sheet\Helpers;

interface AnimationInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Animation
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function name(String $name) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Direction
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $direction
    //
    //--------------------------------------------------------------------------------------------------------
    public function direction(String $direction = 'reverse') : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Status
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function status(String $status) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Fill
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function fill(String $fill) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Repeat
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function repeat(String $repeat) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Duration
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function duration(String $duration) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Delay
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function delay(String $delay) : Animation;

    //--------------------------------------------------------------------------------------------------------
    // Easing
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function easing(String $easing) : Animation;
}