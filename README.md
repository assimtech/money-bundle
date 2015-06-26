# MoneyBundle

[![Build Status](https://travis-ci.org/assimtech/money-bundle.svg?branch=master)](https://travis-ci.org/assimtech/money-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/assimtech/money-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/assimtech/money-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/assimtech/money-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/assimtech/money-bundle/?branch=master)


## Installation

```shell
composer require assimtech/money-bundle
```

Add the bundle to you `AppKernel`

```php
$bundles = array(
    /** Your other bundles */
    new Assimtech\MoneyBundle\AssimtechMoneyBundle(),
);
```


## Services Exposed

This bundle exposes the `Assimtech\Money\Accountant` as the symfony service `assimtech_money.accountant`

See [Money](https://github.com/assimtech/money) for documentation


## Twig integration

This bundle exposes the `Assimtech\Money\Accountant` as a `Twig_Extension`

See [Money](https://github.com/assimtech/money) for documentation
