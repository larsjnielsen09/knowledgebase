<?php
// includes/icon-loader.php

function loadSvgIcon($iconName) {
    $iconPath = __DIR__ . "/../assets/icons/{$iconName}.svg";
    
    if (file_exists($iconPath)) {
        // Read the SVG file
        $svg = file_get_contents($iconPath);
        
        // Add any classes or attributes we want
        // Add our styling classes
        // We're adding both 'card-icon' and a specific class for this icon type
        
        $svg = str_replace(
            '<svg', 
            '<svg class="card-icon ' . $iconName . '-icon"', 
            $svg
        );
        
        return $svg;
    }
    
    // Return a fallback or empty string if icon not found
    return '';
}