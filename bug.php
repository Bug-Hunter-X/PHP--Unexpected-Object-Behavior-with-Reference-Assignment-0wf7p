In PHP, a common yet subtle issue arises when dealing with object references and assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assign by reference

$obj2->value = 10;

echo $obj1->value; // Outputs 10, unexpectedly
```

The problem lies in the assignment `$obj2 = $obj1;`. This doesn't create a copy of `$obj1`; instead, `$obj2` becomes another reference to the same object instance. Modifying `$obj2` directly affects `$obj1`.

This behavior differs from languages that employ value semantics by default. This can lead to unexpected side effects and hard-to-debug situations, especially in larger, more complex applications.