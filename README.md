# Kirby + NY Times API

Kirby CMS + content fetched from The New York Times Top Stories API

## Overview

```
.
├── content
│   └── home
│       └── home.txt
└── site
    ├── config
    │   └── config.php
    ├── models
    │   └── home.php
    └── templates
        └── home.php
```

## Prerequisites

- [PHP](https://www.php.net)
- [Composer](https://getcomposer.org)

## Setup

1. Add an [API key](https://developer.nytimes.com/get-started) to `site/models/home.php`
2. Run in terminal:
```
composer install
composer start
```
