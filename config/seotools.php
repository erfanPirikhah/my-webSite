<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "برنامه نوسی و طراحی سایت", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => '  برنامه نویسی و طراحی سایت به سلیقه شما ،سرعت بالا، امنیت ،مشاوره به صورت رایگان ، برنامه نوسی و طراحی سایت در سمنان، طراحی سایت باکفیت و زیبا، استفاده از جدید ترین ابزار های روز دنیا ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['طراحی سایت باکفیت','طراحی سایت  زیبا','برنامه نوسی و طراحی سایت در سمنان',' استفاده از جدید ترین ابزار های روز دنیا','سرعت بالا','امنیت ','مشاوره به صورت رایگان ','برنامه نویسی','طراحی سایت','کیفیت بالا'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'برنامه نوسی و طراحی سایت', // set false to total remove
            'description' => ' برنامه نویسی و طراحی سایت به سلیقه شما ،سرعت بالا، امنیت ،مشاوره به صورت رایگان ، برنامه نوسی و طراحی سایت در سمنان، طراحی سایت باکفیت و زیبا، استفاده از جدید ترین ابزار های روز دنیا', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'برنامه نوسی و طراحی سایت', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
