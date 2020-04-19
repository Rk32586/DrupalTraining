<?php

namespace Drupal\menulink\Controller;

/**
 * Example controller that we are going to use for tabs
 */
class menulinkController
{
    /**
     * Main Link Page
     */
    public function mainLinkPage()
    {
        return [
            '#markup' => 'Main Link Page.'
        ];
    }
}
