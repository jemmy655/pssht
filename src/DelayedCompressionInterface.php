<?php

/*
* This file is part of pssht.
*
* (c) François Poirotte <clicky@erebot.net>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Clicky\Pssht;

/**
 * Interface for delayed compression.
 */
interface DelayedCompressionInterface
{
    /// Sets a flag indicating user-authentication success.
    public function setAuthenticated();
}