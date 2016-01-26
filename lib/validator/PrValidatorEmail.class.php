<?php

/**
 * This file is part of the Jobeet package.
 *
 */

/**
 * PrValidatorEmail validates PC emails　and mobile emails.
 *
 * @package    Jobeet
 * @subpackage validator
 * @author     Nguyen Van Cuong <nguyen.van.cuong@framgia.com>
 */
class PrValidatorEmail extends sfValidatorRegex
{
  const REGEX_EMAIL = '/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i';

  /**
   * @see sfValidatorRegex
   */
  protected function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);

    $this->setMessage('invalid', 'You email is invalid, please check again.');
    $this->setMessage('min_length', 'This email "%value%" is too short (%min_length% characters min).');
    
    $this->setOption('pattern', self::REGEX_EMAIL);
  }
}
