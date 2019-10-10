# VT/Links

Remove Trailing Slash from all hrefs in magento 2.3.3.
Works for links output via Magento\Framework\View\Element\Html\Link\Current::getHref

# To install extension

Run:

    composer config repositories.vt vcs git@github.com:vsevolod-tarasov/links.git
    composer require vt/links:*
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
