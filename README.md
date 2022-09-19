<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDAnSiAEXWKZ2-STdRlmlonbrG-eisnqzG2uPFlx3YPsJuS5Kth-zaJjYuJkJfjoFcJnE&usqp=CAU" width="400" alt="Laravel Logo"></a></p>

# MailChimp

## About Homework

- clone this repository
- run `composer install` to install Laravel framework into you computer
- run `cp .env.example .env`
- run `php artisan key:generate`
- run `./vendor/bin/sail up` to run this project on docker ENV (having installed docker is required)
- use Postman Collection to test APIs
 
 
## Implementation

### api/get_markdown
this api accept 1 input, markdown(file in .md or .txt). it is converting the markdown 
text to HTML format and return HTML text back to user

### api/publish_markdown
this api accept 3 arguments, name(file_name), markdown(file in .md or .txt) and theme, it is converting the markdown 
text to HTML format and save it in the public/markdown
this is will be accessible through `http://0.0.0.0/public/markdown/file_name.html`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
