<?php

/**
 * Main class to register
 * hook function
 */
class KBBIReferencesHooks
{
    /**
     * KBBI URL
     * @var string
     */
    public static $KBBI_LINK = 'https://kbbi.web.id/';

    /**
     * Register parser hooks functions
     *
     * @param Parser $parser
     * @return void
     * @throws MWException
     */
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setFunctionHook( 'kbbiref', [ self::class, 'renderWordWithLink' ] );
    }

    /**
     * The hook function
     * for parsing
     *
     * @param Parser $parser
     * @param $word
     * @param $link
     * @return array
     */
    public static function renderWordWithLink( Parser $parser, $word, $link=null) {
        if ($link != null) {
            return [
                '<a class="external text" target="_blank" href="'. $link .'">' . $word . '</a>',
                'noparse' => true,
                'isHTML' => true
            ];
        }

        return [
            '<a class="external text" target="_blank" href="'. self::$KBBI_LINK . $word .'">' . $word . '</a>',
            'noparse' => true,
            'isHTML' => true
        ];
    }
}
