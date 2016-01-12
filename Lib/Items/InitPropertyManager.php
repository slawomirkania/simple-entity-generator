<?php

namespace HelloWordPl\SimpleEntityGeneratorBundle\Lib\Items;

use HelloWordPl\SimpleEntityGeneratorBundle\Lib\Interfaces\RenderableInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Manager for init ArrayCollection properties in constructor
 *
 * @author Sławomir Kania <slawomir.kania1@gmail.com>
 */
class InitPropertyManager implements RenderableInterface
{

    /**
     * Property
     *
     * @Assert\NotNull(message="Init property has to know about property")
     * @Assert\Valid()
     * @var PropertyManager
     */
    private $property = null;

    /**
     * @return PropertyManager
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param PropertyManager $property
     * @return ClassManager
     */
    public function setProperty(PropertyManager $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Return common element template
     *
     * @return string
     */
    public function getTemplate()
    {
        return ""
            ."\$this-><property_name> = new <property_type>();";
    }

    /**
     * Return set of tags used in template
     *
     * @return array
     */
    public function getTemplateTags()
    {
        return [
            self::TAG_PROPERTY_NAME,
            self::TAG_PROPERTY_TYPE,
        ];
    }
}
