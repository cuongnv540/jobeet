<?php

/**
 * JobeetJob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class JobeetJob extends BaseJobeetJob
{
	public function __toString()
  	{
    	return sprintf('%s at %s (%s)', $this->getPosition(), $this->getCompany(), $this->getLocation());
  	}

  	public function getCompanySlug()
	{
	  return Jobeet::slugify($this->getCompany());
	}
	 
	public function getPositionSlug()
	{
	  return Jobeet::slugify($this->getPosition());
	}
	 
	public function getLocationSlug()
	{
	  return Jobeet::slugify($this->getLocation());
	}
}
