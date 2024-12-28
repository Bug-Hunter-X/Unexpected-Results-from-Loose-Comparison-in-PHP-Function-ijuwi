# PHP Loose Comparison Bug

This repository demonstrates a common bug in PHP code where loose comparison (`==`) is used instead of strict comparison (`===`). Loose comparison can lead to unexpected results when comparing values of different types.

## Bug Description

The `foo()` function in `bug.php` uses loose comparison to check if two values are equal.  This can lead to incorrect results if the values are of different types but have the same string representation (e.g., `0` and `'0'`).

The `bugSolution.php` file shows the corrected version that uses strict comparison (`===`) to avoid this issue. 

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. Notice the incorrect result.
3. Run `bugSolution.php`. Notice the correct result.

## Solution

Always use strict comparison (`===`) when comparing values in PHP to ensure type safety and avoid unexpected behavior.