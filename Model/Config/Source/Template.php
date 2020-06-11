<?php

namespace Gswo\SimpleCookieAlert\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Template implements OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'full_width_top', 'label' => __('Full Width Top')],
            ['value' => 'full_width_bottom', 'label' => __('Full Width Bottom')],
            ['value' => 'half_width_bottom_left', 'label' => __('Half Width Bottom Left')],
            ['value' => 'half_width_bottom_right', 'label' => __('Half Width Bottom Right')],
            ['value' => 'half_width_top_left', 'label' => __('Half Width Top Left')],
            ['value' => 'half_width_top_right', 'label' => __('Half Width Top Right')],
            ['value' => 'center', 'label' => __('Center')]
        ];
    }
}
