<?php

/**
 * Class FlipText
 * @package FlipText
 */
class FlipText {
    /**
     * @var null
     */
    private $text = null;

    /**
     * @param $text
     */
    function __construct($text) {
        if(!empty($text)) {
            $this->text = $this->text_convert($text);
            return $this->text;
        } else {
            return null;
        }
    }

    /**
     * @return null|string
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param $text
     * @return string
     */
    private function text_convert($text) {
        return strrev ($text);
    }
} 