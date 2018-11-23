<?php
/**
 * Created by mac.
 * User: mac
 * Date: 2018/11/21
 * Time: 9:50 PM
 */

namespace AppBundle\Menu;
use Knp\Menu\FactoryInterface;

class Builder
{
    public function navMenu(FactoryInterface $factory, array $options){
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class','nav navbar-nav');

        $menu->addChild('home', array('route'=>'homepage', 'label'=>'首页'));
        $menu->addChild('news',array('route'=>'news_index','label'=>'新闻'));
        return $menu;
    }
}