<?php
class swipersliderdisplayModuleFrontController extends ModuleFrontController
{
    /**
     * @throws PrestaShopException
     */
    public function initContent(): void
    {
        parent::initContent();
        $this->setTemplate('module:swiperslider/views/templates/front/display.tpl');
    }
}
