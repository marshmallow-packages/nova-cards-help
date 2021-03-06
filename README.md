# Nova Help Card

## Installation

You may install this package using composer.

```bash
composer require marshmallow/cards-help
```

### From config

```php
namespace App\Providers;

// ...

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    use Marshmallow\Cards\Help\Help;

    protected function cards()
    {
        return [
            (new Help)->fromConfig(),
        ];
    }
}
```

### Manual

```php
namespace App\Providers;

// ...

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    use Marshmallow\Cards\Help\Help;
    use Marshmallow\Cards\Help\Facades\HelpItem;

    protected function cards()
    {
        return [
            (new Help)->load(function ($help) {
                return $help->title('This is amazing')
                    ->description('Marshmallow builts simple solutions for complex problems.')
                    ->addItem(
                        HelpItem::title('Resources')
                            ->description('Nova\'s resource manager allows you to quickly view and manage your Eloquent model records directly from Nova\'s intuitive interface.')
                            ->icon('<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"><path fill="var(--primary)" d="M31.51 25.86l7.32 7.31c1.0110617 1.0110616 1.4059262 2.4847161 1.035852 3.865852-.3700742 1.3811359-1.4488641 2.4599258-2.83 2.83-1.3811359.3700742-2.8547904-.0247903-3.865852-1.035852l-7.31-7.32c-7.3497931 4.4833975-16.89094893 2.7645226-22.21403734-4.0019419-5.3230884-6.7664645-4.74742381-16.4441086 1.34028151-22.53181393C11.0739495-1.11146115 20.7515936-1.68712574 27.5180581 3.63596266 34.2845226 8.95905107 36.0033975 18.5002069 31.52 25.85l-.01.01zm-3.99 4.5l7.07 7.05c.7935206.6795536 1.9763883.6338645 2.7151264-.1048736.7387381-.7387381.7844272-1.9216058.1048736-2.7151264l-7.06-7.07c-.8293081 1.0508547-1.7791453 2.0006919-2.83 2.83v.01zM17 32c8.2842712 0 15-6.7157288 15-15 0-8.28427125-6.7157288-15-15-15C8.71572875 2 2 8.71572875 2 17c0 8.2842712 6.71572875 15 15 15zm0-2C9.82029825 30 4 24.1797017 4 17S9.82029825 4 17 4c7.1797017 0 13 5.8202983 13 13s-5.8202983 13-13 13zm0-2c6.0751322 0 11-4.9248678 11-11S23.0751322 6 17 6 6 10.9248678 6 17s4.9248678 11 11 11z"/></svg>')
                            ->link('https://marshmallow.dev', true)
                    )
            }),
        ];
    }
}
```
