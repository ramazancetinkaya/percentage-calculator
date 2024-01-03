# Percentage Calculator Library

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Version](https://img.shields.io/badge/version-1.0.0-green.svg)](https://github.com/ramazancetinkaya/percentage-calculator)
![PHP](https://img.shields.io/badge/php-%3E%3D%208.0-8892BF.svg)
[![GitHub Issues](https://img.shields.io/github/issues/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/issues)
[![GitHub Forks](https://img.shields.io/github/forks/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/network)
[![GitHub Stars](https://img.shields.io/github/stars/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/stargazers)

A powerful and modern PHP library for performing various percentage calculations.

<a href="https://github.com/ramazancetinkaya/percentage-calculator/issues">Report a Bug</a>
·
<a href="https://github.com/ramazancetinkaya/percentage-calculator/pulls">New Pull Request</a>

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Examples](#examples)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

## Features

- Calculate the percentage of a number.
- Calculate the percentage change between two numbers.
- Increase a number by a percentage.
- Decrease a number by a percentage.

## Installation

You can install this library via [Composer](https://getcomposer.org/). Run the following command:

```bash
composer require ramazancetinkaya/percentage-calculator
```

## Usage

```php
require_once 'vendor/autoload.php';

use ramazancetinkaya\PercentageCalculator;

$calculator = new PercentageCalculator();
```

## Examples

```php
try {
    // Calculate percentage
    $result = $calculator->calculatePercentage(250, 20);
    echo "20% of 250 is: " . $result . "\n";

    // Calculate percentage change
    $change = $calculator->calculatePercentageChange(100, 75);
    echo "Percentage change from 100 to 75 is: " . $change . "%\n";

    // Increase by percentage
    $increase = $calculator->increaseByPercentage(50, 25);
    echo "50 increased by 25% is: " . $increase . "\n";

    // Decrease by percentage
    $decrease = $calculator->decreaseByPercentage(80, 10);
    echo "80 decreased by 10% is: " . $decrease . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
```

## Contributing

Contributions are welcome! Please fork the repository and create a pull request.

## Credits

This library was made possible by the following awesome contributors:

- **Ramazan Çetinkaya** - [@ramazancetinkaya](https://github.com/ramazancetinkaya)
  - Lead Developer

Special thanks to the following resources:

- [PHP Documentation](https://www.php.net/docs.php) - Valuable information on PHP programming language.
- [Composer](https://getcomposer.org/) - Dependency manager for PHP.

If you've contributed to this project and your name is not listed, please let us know, and we'll add you!

Thank you to everyone who has helped make this project better!

## License

This project is licensed under the MIT License. For more details, see the [LICENSE](LICENSE) file.
