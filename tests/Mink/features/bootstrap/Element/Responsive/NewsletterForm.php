<?php

namespace Responsive;

use SensioLabs\Behat\PageObjectExtension\PageObject\Element;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Shopware\Models\Attribute\Emotion;

class NewsletterForm extends \Emotion\NewsletterForm
{
    /**
     * @var array $selector
     */
    protected $selector = array('css' => 'div.footer--column.column--newsletter');

    public $cssLocator = array(
        'textInput' => 'input.newsletter--field',
        'submitButton' => 'button.newsletter--button'
    );
}