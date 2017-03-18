<?php namespace ZN\ViewObjects\Bootstrap\JSP;

use JQ;

class Statements extends JSPExtends implements StatementsInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    public function if(String $condition, Callable $callback)
    {
        $this->_statements($condition, $callback, 'if');

        return $this;
    }

    public function elseif(String $condition, Callable $callback)
    {
        $this->_statements($condition, $callback, 'else if');

        return $this;
    }

    public function else(Callable $callback)
    {
        $this->_statements($condition = NULL, $callback, 'else');
    }

    public function switch(String $condition, Callable $callback)
    {
        $this->_statements($condition, $callback, 'switch');
    }

    public function case(String $condition, Callable $callback)
    {
        echo 'case ' . JQ::stringControl($condition) . ' :' . EOL;
        echo $callback() . EOL;

        return $this;
    }

    public function default(Callable $callback)
    {
        echo 'default:' . EOL;
        echo $callback() . EOL;

        return $this;
    }

    public function break()
    {
        echo 'break;' . EOL;

        return $this;
    }

    public function return(String $data = NULL)
    {
        echo 'return' . ( ! empty($data) ? ' '.$data : '' ) . ';' . EOL;
    }
}