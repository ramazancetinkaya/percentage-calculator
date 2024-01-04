# Percentage Calculator Library

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Latest Version](https://img.shields.io/github/v/release/ramazancetinkaya/percentage-calculator)](https://github.com/ramazancetinkaya/percentage-calculator/releases)
![PHP](https://img.shields.io/badge/php-%3E%3D%208.0-8892BF.svg)
[![GitHub Issues](https://img.shields.io/github/issues/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/issues)
[![GitHub Forks](https://img.shields.io/github/forks/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/network)
[![GitHub Stars](https://img.shields.io/github/stars/ramazancetinkaya/percentage-calculator.svg)](https://github.com/ramazancetinkaya/percentage-calculator/stargazers)

A powerful and modern PHP library for performing various percentage calculations.

<a href="https://github.com/ramazancetinkaya/percentage-calculator/issues">Report a Bug</a>
·
<a href="https://github.com/ramazancetinkaya/percentage-calculator/pulls">New Pull Request</a>

## 🌟 Star this Repository!

If you find the Percentage Calculator library helpful or interesting, consider giving it a star! ⭐️

Your star helps us grow and motivates us to continue improving the library. It also makes it easier for others to discover and benefit from this project.

### How to Star?

1. **Login to Your GitHub Account:** You need to have a GitHub account.
2. **Visit the Repository:** Go to the [Percentage Calculator Repository](https://github.com/ramazancetinkaya/percentage-calculator).
3. **Click the Star Button:** On the top-right corner of the page, you'll find a "Star" button. Click on it!

That's it! Thank you for your support! 🚀

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
