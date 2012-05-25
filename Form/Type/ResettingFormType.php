<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ResettingFormType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('new', 'repeated', array('type' => 'password'));
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultOptions()
    {
        return array(
            'data_class' => 'FOS\UserBundle\Form\Model\ResetPassword',
            'intention'  => 'resetting',
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'fos_user_resetting';
    }
}
