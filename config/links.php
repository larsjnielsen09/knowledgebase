<?php
// config/links.php

require_once __DIR__ . '/../includes/icon-loader.php';

$quickLinks = [
    'activity' => [
        'url' => '/activity.php',
        'title' => 'Activity',
        'description' => 'View your activity',
        'icon' => loadSvgIcon('bluetooth')
    ],
    'test' => [
        'url' => '/test.php',
        'title' => 'Test',
        'description' => 'Learn how to test',
        'icon' => loadSvgIcon('book')
    ],
    'getting-started' => [
        'url' => '/getting-started.php',
        'title' => 'Getting Started',
        'description' => 'Learn how to get started with our product',
        'icon' => loadSvgIcon('check-circle')
    ],
    'documentation' => [
        'url' => '/documentation.php',
        'title' => 'Documentation',
        'description' => 'Browse our detailed product documentation',
        'icon' => loadSvgIcon('chrome')
    ],
    'tutorials' => [
        'url' => '/tutorials.php',
        'title' => 'Tutorials',
        'description' => 'Learn with step-by-step guides',
        'icon' => loadSvgIcon('codepen')
    ],
    'support' => [
        'url' => '/support.php',
        'title' => 'Support',
        'description' => 'Get help from our support team',
        'icon' => loadSvgIcon('disc')
    ],
    'community' => [
        'url' => '/community.php',
        'title' => 'Community',
        'description' => 'Join our community forums',
        'icon' => loadSvgIcon('dribbble')
    ]
];

// Additional links for the footer
$footerLinks = [
    'quick_links' => [
        'title' => 'Quick Links',
        'links' => [
            'getting-started' => ['url' => '/getting-started.php', 'title' => 'Getting Started'],
            'docs' => ['url' => '/docs.php', 'title' => 'Documentation'],
            'api' => ['url' => '/api.php', 'title' => 'API Documentation'],
            'Community' => ['url' => '/Community.php', 'title' => 'Join our community forums'],
            'tutorials' => ['url' => '/tutorials.php', 'title' => 'Tutorials']
        ]
    ],
    'support' => [
        'title' => 'Support',
        'links' => [
            'faq' => ['url' => '/faq.php', 'title' => 'FAQ'],
            'contact' => ['url' => '/contact.php', 'title' => 'Contact Us'],
            'tickets' => ['url' => '/support.php', 'title' => 'Submit a Ticket'],
            
            'status' => ['url' => '/status.php', 'title' => 'System Status']
        ]
    ]
];