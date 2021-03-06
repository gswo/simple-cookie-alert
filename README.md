# Magento 2 Gswo Simple Cookie Notice
Simple Cookie Alert extension for Magento 2

# Installation & Configuration
* Run commands in Magento root directory
    ```
    composer require gswo/simple-cookie-alert
    bin/magento maintenance:enable
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento setup:static-content:deploy
    bin/magento maintenance:disable
    ```

* Go to Admin Panel > Stores > Configuration > GSWO > Simple Cookie Alert, set Module Enable to "Yes", customize Your Cookie Alert and click "Save Config"

* Run command in Magento root directory
    ```
    bin/magento cache:clean
    ```
  

# Features
* Custom content using WYSIWYG editor
* Alert window: custom background and border colors
* Dismiss button: custom label, background, border and text colors
* Custom template:
    * Full width Top
    * Full width bottom
    * Half width bottom left
    * Half width bottom right
    * Half width top left
    * Half width top right
    * Center
* Mobile friendly
    


# Demos
https://gswo.shop/magento-2-simple-cookie-alert




