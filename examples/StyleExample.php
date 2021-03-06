<?php

/**
 * StyleExample.php
 *
 * This file contains examples to modify the style of the svg elements.
 *
 * @author	J. Xavier Atero
 */

require realpath(__DIR__ . '/..' . '/vendor/autoload.php');;

use b1t\css\CSSStyleDeclaration;
use b1t\svg\SVGSVGElement;
use b1t\svg\SVGRectElement;
use b1t\svg\SVGCircleElement;
use b1t\svgf\SVGFElement;


$dom_doc_svg = new \DOMDocument('1.0', 'utf-8');

$svg_svg = SVGFElement::svg($dom_doc_svg,'a4',SVGFElement::SIZE_A4);

// create rectangle
$svg_rect = new SVGRectElement($dom_doc_svg);
$svg_rect->setX('120');
$svg_rect->setY('120');
$svg_rect->setWidth('60');
$svg_rect->setHeight('60');
$svg_rect->style = 'stroke:#d9737a;stroke-width:2;';
$svg_svg->appendChild($svg_rect);

// create circle
$svg_circle = new SVGCircleElement($dom_doc_svg);
$svg_circle->cx = '250';
$svg_circle->cy = '100';
$svg_circle->r = '40';
$svg_circle->style->setProperty('fill','#d9737a','');
$svg_circle->style->setProperty('stroke','black','');
$svg_svg->appendChild($svg_circle);

// create circle and rectangle with SVGUtils class methods
$svg_rect_1 = SVGFElement::rect($dom_doc_svg,'40','40','rect_1','130','50','5','5','#d9737a','black');
$svg_svg->appendChild($svg_rect_1);
$svg_circle_1 = SVGFElement::circle($dom_doc_svg,'10','circle_1','250','60','black','#d9737a','3');
$svg_svg->appendChild($svg_circle_1);

$txt_svg = $dom_doc_svg->saveXML();

echo $txt_svg;