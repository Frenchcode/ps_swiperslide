<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */


declare(strict_types=1);

namespace PrestaShop\Module\SwiperSlider\Form;

use PrestaShopBundle\Form\Admin\Type\ColorPickerType;
use PrestaShopBundle\Form\Admin\Type\ImagePreviewType;
use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SwiperConfigurationFormType extends TranslatorAwareType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('config_title', TextType::class, [
                'label' => $this->trans('Title', 'Modules.SwiperSlider.Admin'),
                'help' => $this->trans('Enter the slideshow title', 'Modules.SwiperSlider.Admin'),
                'required' => true,
            ])
            ->add('config_title', TextType::class, [
                'label' => $this->trans('Text', 'Modules.SwiperSlider.Admin'),
                'help' => $this->trans('Enter the slideshow text', 'Modules.SwiperSlider.Admin'),
                'required' => true,
            ])
            ->add('config_color', ColorPickerType::class, [
                'label' => $this->trans('Color', 'Modules.SwiperSlider.Admin'),
                'help' => $this->trans('Pick a color', 'Modules.SwiperSlider.Admin'),
                'required' => true,
            ])
            ->add('config_button', TextType::class, [
                'label' => $this->trans('Button', 'Modules.SwiperSlider.Admin'),
                'help' => $this->trans('Enter the button text', 'Modules.SwiperSlider.Admin'),
                'required' => true,
            ])
            ->add('config_image', FileType::class, [
                'label' => $this->trans('Image', 'Modules.SwiperSlider.Admin'),
            ]);

    }
}