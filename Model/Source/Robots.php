<?php
namespace Orangecat\CmsPageRobots\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Robots implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[0] = ['label' => 'Default', 'value' => ''];
        $options[1] = ['label' => 'INDEX, FOLLOW', 'value' => 'INDEX,FOLLOW'];
        $options[2] = ['label' => 'NOINDEX, FOLLOW', 'value' => 'NOINDEX,FOLLOW'];
        $options[3] = ['label' => 'INDEX, NOFOLLOW', 'value' => 'INDEX,NOFOLLOW'];
        $options[4] = ['label' => 'NOINDEX, NOFOLLOW', 'value' => 'NOINDEX,NOFOLLOW'];

        return $options;
    }
}
