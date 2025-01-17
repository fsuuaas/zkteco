<?php

namespace Fsuuaas\Zkteco\Lib\Helper;

use Fsuuaas\Zkteco\Lib\ZKTeco;

class SerialNumber
{
    /**
     * @param ZKTeco $self
     * @return bool|mixed
     */
    static public function get(ZKTeco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~SerialNumber';

        return $self->_command($command, $command_string);
    }
}