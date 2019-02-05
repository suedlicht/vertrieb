<?php
//error_reporting( E_ALL );
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
/**
 * Module information
 */
$aModule = [
    'id'           => 'suedvertrieb',
    'title'        => 'Vertrieb Ausgabe',
    'description'  => ['de' => 'Vertriebstool'],
    'thumbnail'    => '',
    'version'      => '1.3',
    'author'       => 'Suedlicht',
    'email'        => 'info@suedlicht.com',
    'extend'       => [
       // \OxidEsales\Eshop\Application\Controller\FrontendController::class => \suedlicht\suedfrontkatmodul\Application\Controller\motrradselect::class,
       // \OxidEsales\Eshop\Core\ViewConfig::class                              => \suedlicht\suedfrontkatmodul\Core\ViewConfig::class,
        //\OxidEsales\Eshop\Core\ViewConfig::class                              =>    \suedlicht\suedfrontkatmodul\Core\mselect::class,
      //  \OxidEsales\Eshop\Core\ViewConfig::class                              =>    \suedlicht\vertrieb\Core\vertrieb::class,
          \OxidEsales\Eshop\Core\Controller\BaseController                      =>    \suedlicht\vertrieb\Core\vertrieb::class,
      //  \OxidEsales\Eshop\Application\Controller\ArticleListController::class =>    \suedlicht\suedfrontkatmodul\Application\Controller\produkt::class,
        ],
    
    /*
    'controllers' => [
        'motorradselect' => \suedlicht\suedfrontkatmodul\Application\Controller\motorradselect::class,
        'produktkat'     => \suedlicht\suedfrontkatmodul\Application\Controller\produkt::class,
    ],
    */
    
    'templates'   => [],
    'blocks'      => [],
    'settings'    => [],
  ];  
 
//error_log( E_ALL );
//echo " mettatag";

