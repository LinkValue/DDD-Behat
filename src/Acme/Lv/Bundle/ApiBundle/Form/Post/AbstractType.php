<?php

namespace Acme\Lv\Bundle\ApiBundle\Form\Post;

use Acme\Lv\Component\Domain\Action\PostActionDispatcherDomain;
use Symfony\Component\Form\AbstractType as BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Abstract form type for Post entity.
 */
abstract class AbstractType extends BaseAbstractType
{
    /**
     * @var PostActionDispatcherDomain
     */
    protected $postDomain;

    /**
     * Construct.
     *
     * @param PostActionDispatcherDomain $postDomain
     */
    public function __construct(PostActionDispatcherDomain $postDomain)
    {
        $this->postDomain = $postDomain;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'allow_extra_fields' => true,
            'cascade_validation' => false,
        ));
    }

    /**
     * Post form prototype definition.
     *
     * @warning : function auto generated by MajoraGeneratorBundle, implement your own logic here !
     *
     * @see FormInterface::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }
}
