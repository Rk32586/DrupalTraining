<?php

namespace Drupal\drupalup_links\Controller;

/**
 * Example controller that we are going to use for tabs
 */
class DrupalUpLinksController
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
