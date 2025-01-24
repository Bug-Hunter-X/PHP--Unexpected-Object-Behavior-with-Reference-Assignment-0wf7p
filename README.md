# PHP Object Reference Assignment Bug

This repository demonstrates a common, subtle bug in PHP related to object references and assignments.  Modifying an object assigned by reference unexpectedly changes the original object.  The `bug.php` file shows the problematic code, while `bugSolution.php` presents the solution.

## Problem

When objects are assigned using the `=` operator in PHP, they are assigned by reference, not by value.  This means that both variables point to the same object in memory.  Modifying one variable's properties will affect the other.

## Solution

To create a copy of an object, use the `clone` keyword. This creates a new object with its own set of properties, independent of the original.

## How to reproduce
1. Clone this repository.
2. Run `bug.php`. Observe the unexpected output.
3. Run `bugSolution.php`. Observe the corrected output.