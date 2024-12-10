A robust solution involves explicitly checking if the key exists before accessing it using the `isset()` function. This prevents unexpected behavior and improves code reliability:

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (isset($myArray["c"])) {
  echo $myArray["c"];
} else {
  echo "Key 'c' is not set"; //Handle the case gracefully
}
?>
```

Alternatively, the null coalescing operator (`??`) can provide a more concise way to handle the case where the key might not exist:

```php
<?php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

echo $myArray["c"] ?? "Key 'c' is not set";
?>
```

This approach provides a default value ("Key 'c' is not set" in this instance) if the key is not found, making the code cleaner and more readable.