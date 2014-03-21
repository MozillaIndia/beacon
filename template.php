<?php

function beacon_menu_tree($variables) {
    
    $html = "<nav id=\"nav-main\" role=\"navigation\">";
    $html .= "<span class=\"toggle\" role=\"button\" aria-controls=\"nav-main-menu\" tabindex=\"0\">Menu</span>";
    $html .= "<ul id=\"nav-main-menu\">\n";
    $html .= $variables['tree'];
    /*foreach ($variables['links'] as $link) {
    $html .= "<li class=\"\">".l($link['title'], $link['path'], $link)."</li>";
    }*/
    $html .= "</ul>\n";
    $html .= "</nav>\n";
    return $html;
    
}
