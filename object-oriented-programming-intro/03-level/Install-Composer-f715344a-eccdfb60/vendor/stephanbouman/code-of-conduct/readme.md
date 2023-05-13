# Bit Acadamy Code Of Conduct 
This package returns a random rule from the code of conduct of Bit Academy
```bash
composer require stephanbouman/code-of-conduct
```

## using the generator

```php  
$code = new CodeOfConduct();
echo $code->getRule(); // generates a random rule
```

## contributing
Did the rules change overnight? Feel free to make a pull request!