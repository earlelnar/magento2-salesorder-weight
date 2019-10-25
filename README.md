# Magento 2 Sales Order Weight Total
Add custom block in Magento sales_order_view.xml
<br/>
<br/>
Display Total Order Weight in Sales Order View

</br>

## Installation
1. Download the extension .zip file and extract the files.
2. Copy the extension files folder to the {magento2-root-dir}/app/code
3. Run the following series of command from SSH console of your server:
```
 php bin/magento maintenance:enable
 rm -rf var/cache/;  rm -rf var/di/;  rm -rf generated/;  rm -rf var/view_preprocessed/;  rm -rf pub/static/*;
 php bin/magento setup:upgrade
 php bin/magento setup:static-content:deploy -f
 php bin/magento cache:flush
 php bin/magento setup:clean
 php bin/magento maintenance:disable
```

4. Go to Admin > Sales > Orders >  Select any orders

![image](https://user-images.githubusercontent.com/14094984/67568221-3209cb80-f75e-11e9-974b-7187c3136455.png)

<br/>


## Magento Tested Version
Magento 2.3.1

<br/>

## Changelog
**Version 2.0.0 (2019-10-25)**

