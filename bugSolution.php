To avoid this issue, use the `clone` keyword to create a copy of the object:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = clone $obj1; // Create a copy

$obj2->value = 10;

echo $obj1->value; // Outputs 0
echo $obj2->value; // Outputs 10
```

Now, modifying `$obj2` doesn't affect `$obj1`, ensuring predictable and correct behavior.