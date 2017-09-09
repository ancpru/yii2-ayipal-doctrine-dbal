<?php

/*
 * Copyright (c) 2017, Andreas Prucha, Abexto - Helicon Software Development
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * * Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * * Redistributions in binary form must reproduce the above copyright notice,
 *   this list of conditions and the following disclaimer in the documentation
 *   and/or other materials provided with the distribution.
 * * Neither the name of the copyright holder nor the names of its contributors 
 *   may be used to endorse or promote products derived from this software 
 *   without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace abexto\logeia\yii\doctrine\dbal;

/**
 * Description of DoctrineServiceLocator
 *
 * @author Andreas Prucha, Abexto - Helicon Software Development
 */
class DoctrineServiceLocator extends base\AbstractDoctrineServiceLocator
{
    const DEFAULT_CONFIGURATION_ID = 'defaultConfiguration';
    const DEFAULT_CONNECTION_ID = 'defaultConnection';
    
    /**
     * @var string Default class of configuration components
     */
    public $defaultConfigurationClass = configuration\Component::class;
    
    /**
     * @var string Default class of Connection component
     */
    public $defaultConnectionClass = connection\Component::class;
   
    /**
     * Returns the requested configuration
     * @param string $id
     * @return configuration\Component
     */
    public function getConfiguration($id = self::DEFAULT_CONFIGURATION_ID)
    {
        return $this->get($id);
    }
    
    /**
     * Returns the requested Connection
     * @param string $id
     * @return \abexto\logeia\yii\dbal\connections\Component
     */
    public function getConnection($id = self::DEFAULT_CONNECTION_ID)
    {
        return $this->get($id);
    }
    
}