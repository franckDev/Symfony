<?php
// src/FC/PlatformBundle/Entity/AdvertSkill.php

namespace FC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertSkill
 *
 * @ORM\Table(name="advert_skill")
 * @ORM\Entity(repositoryClass="FC\PlatformBundle\Repository\AdvertSkillRepository")
 */
class AdvertSkill
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @ORM\ManyToOne(targetEntity="FC\PlatformBundle\Entity\Advert")
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;

    /**
     * @ORM\ManyToOne(targetEntity="FC\PlatformBundle\Entity\Skill")
     * @ORM\JoinColumn(nullable=false)
     */
    private $skill; 

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return AdvertSkill
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set advert
     *
     * @param \FC\PlatformBundle\Entity\Advert $advert
     *
     * @return AdvertSkill
     */
    public function setAdvert(\FC\PlatformBundle\Entity\Advert $advert)
    {
        $this->advert = $advert;
    
        return $this;
    }

    /**
     * Get advert
     *
     * @return \FC\PlatformBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set skill
     *
     * @param \FC\PlatformBundle\Entity\Skill $skill
     *
     * @return AdvertSkill
     */
    public function setSkill(\FC\PlatformBundle\Entity\Skill $skill)
    {
        $this->skill = $skill;
    
        return $this;
    }

    /**
     * Get skill
     *
     * @return \FC\PlatformBundle\Entity\Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }
}
