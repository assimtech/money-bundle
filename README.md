# MoneyBundle

## Installation

```shell
composer require assimtech/money-bundle
```

Add the bundle to you `AppKernel`

```php
$bundles = array(
    /** *** */

    new Assimtech\MoneyBundle\AssimtechMoneyBundle(),
);
```


## Services Exposed

This bundle exposes the `Assimtech\Money\Accountant` as the symfony service `assimtech_money.accountant`
