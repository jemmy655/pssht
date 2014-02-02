<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Clicky\Pssht\Messages\USERAUTH;

use Clicky\Pssht\Messages\Base;

class   SUCCESS
extends Base
{
    static public function getMessageId()
    {
        return 52;
    }
}
