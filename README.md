
## Stripe Docs
https://stripe.com/docs/payments/integration-builder

## Set up the server
- Install the stripe php library via the composer. 
    `composer require stripe/stripe-php`

 ### Laravel Cashier (Stripe)cashier
 https://laravel.com/docs/8.x/billing#introduction
- Install the Cashier package for stripe using composer package manager. 
    `composer require laravel/cashier`

###
> Billable Model
https://laravel.com/docs/8.x/billing#billable-model
- Before using Cashier, add the Billable trait to your billable model definition.
    `use Billable;`

### Configure API Keys
https://laravel.com/docs/8.x/billing#api-keys
- Next, you should configure your Stripe API keys in your application's .env file.