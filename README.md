# MoneyBundle

[![Build Status](https://travis-ci.org/assimtech/money-bundle.svg?branch=master)](https://travis-ci.org/assimtech/money-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/assimtech/money-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/assimtech/money-bundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/assimtech/money-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/assimtech/money-bundle/?branch=master)

This bundle integrates [Money](https://github.com/assimtech/money) with Symfony.


**THIS REPOSITORY HAS BEEN MOVED TO [Assimtech\FiatBundle](https://github.com/assimtech/fiat-bundle)**

The last version of `Assimtech\Money` is `1.1.3`, `Assimtech\Fiat` follows on from `2.0.0`. The move is due to the naming of `Assimtech\Money\Money`.
The last version of `Assimtech\MoneyBundle` is `1.0.4`, `Assimtech\FiatBundle` follows on from `2.0.0`.


## Installation

```shell
composer require assimtech/money-bundle
```

Add the bundle to your `AppKernel`

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
