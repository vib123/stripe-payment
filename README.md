# stripe-payment
# php artisan key:generate (for generating the key)

1. composer create-project laravel/laravel stripe-payment
2. composer require stripe/stripe-php
3. create an account and get the api key
	link - https://dashboard.stripe.com/test/apikeys
4. define your key in .env file
	STRIPE_KEY=pk_test_key
	STRIPE_SECRET=sk_test_key
5. run the below command
	php artisan serve
	http://127.0.0.1:8000/stripe

6. Switch the branch "trait_example" for seeing trait example
	run the below command
	php artisan migrate
	php artisan db:seed --class=StudentSeeder
	php artisan serve
	http://127.0.0.1:8000/students

7. Switch the branch "custom_route" for seeing custom route/reverse route example
	run the below command
	php artisan serve
	http://127.0.0.1:8000/admin

8. Switch the branch "event_listener" for seeing event/listener example. It will update a random 	student field "updated_at"
	php artisan serve
	http://127.0.0.1:8000/admin