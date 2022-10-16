<?php

/**
 * Construit le menu de navigation
 * @param string $location Rentrer l'emplacement du menu (header, footer)
 * @return string
 */
function getNavigation (string $location) :string
{
    $html = "";

    if ($location == 'header') 
    {
        $html .= "<nav class='menu-header'><ul>";
    } 
    elseif ($location == 'footer') 
    {
        $html .= "<nav class='menu-footer'><ul>";
        $html .= "<p>Navigation</p>";
    }

    $html .= getNavItem("/index.php", "Accueil");
    $html .= getNavItem("/services.php", "Services");
    $html .= getNavItem("/blog.php", "Blog");
    $html .= getNavItem("/contact.php", "Contact");

    $html .= "</ul></nav>";

    return $html;
}

/**
 * Construit un item du menu de navigation
 * @param string $page URL de la page (= nom du fichier PHP dans notre cas)
 * @param string $title Titre de la page
 * @return string
 */
function getNavItem (string $page, string $title) :string 
{
    $classActive = "";

    // $_SERVER['SCRIPT_NAME'] récupère le nom du script courant
    if ($_SERVER['SCRIPT_NAME'] == $page) 
    {
        $classActive = "active";
    }

    return "<li class='$classActive'>
                <a href='$page'>$title</a>
            </li>";
}
