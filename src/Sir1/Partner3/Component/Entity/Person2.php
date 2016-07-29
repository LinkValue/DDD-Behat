<?php

namespace Sir1\Partner3\Component\Entity;

use Majora\Framework\Model\CollectionableInterface;
use Majora\Framework\Model\CollectionableTrait;
use Majora\Framework\Serializer\Model\SerializableTrait;
use Majora\Framework\Model\TimedTrait;

/**
 * Person2 model class.
 */
class Person2 implements CollectionableInterface
{
    use CollectionableTrait, SerializableTrait, TimedTrait;

    /**
     * @var int
     */
    protected $id;

    /**
     * @see ScopableInterface::getScopes()
     */
    public static function getScopes()
    {
        return array(
            'id' => 'id',
            'default' => array('id'),
        );
    }

    /**
     * Returns Person2 id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Define Person2 id.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    // *************************************************
    //
    // Class auto generated by MajoraGeneratorBundle
    // Implement your own logic here !
    //
    // *************************************************
}