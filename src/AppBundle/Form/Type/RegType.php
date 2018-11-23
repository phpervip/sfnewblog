<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/23
 * Time: 9:17 PM
 */

namespace AppBundle\Form\Type;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;

class RegType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        parent::buildForm($builder,$options);
        $builder->add('captcha','captcha',array(
            'mapped'=>false
        ));
    }

    public function getName(){
        return 'app_reg';
    }
}