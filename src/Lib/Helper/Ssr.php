<?php

namespace Fsuuaas\Zkteco\Lib\Helper;

use Fsuuaas\Zkteco\Lib\ZKTeco;

class Ssr
{
    /**
     * @param ZKTeco $self
     * @return bool|mixed
     */
    static public function get(ZKTeco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SSR';

        return $self->_command($command, $command_string);
    }
}