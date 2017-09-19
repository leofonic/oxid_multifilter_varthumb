<?php
$aModule = array(
    'id'          => 'varthumb',
    'title'       => 'Zunderweb Variant Thumbnail Extension',
    'description' =>  array(
        'de'=>'Extension f&uuml;r Modul Multifilter XL: Artikel Thumbnail nach Attribut-Filtern laden',
        'en'=>'Extension for Module Multifilter XL: Load Article Thumbnail according to attributefilters',
    ),
    'version'     => '0.9',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxarticle' => 'zunderweb/varthumb/models/varthumb_oxarticle',
    ),
);
