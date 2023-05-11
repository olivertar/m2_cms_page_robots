<?php
namespace Orangecat\CmsPageRobots\Plugin\Cms\Block;

class Page
{
    /**
     * @var \Magento\Framework\View\Page\Config
     */
    private $pageConfig;

    /**
     * Constructor
     *
     * @param Config $pageConfig
     */
    public function __construct(
        \Magento\Framework\View\Page\Config $pageConfig
    ) {
        $this->pageConfig = $pageConfig;
    }

    /**
     * After Get Page
     *
     * @param object $subject
     * @param object $result
     * @return object $result
     */
    public function afterGetPage($subject, $result)
    {
        if ($result->getRobots()) {
            $this->pageConfig->setRobots($result->getRobots());
        }

        return $result;
    }
}
