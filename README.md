
# GenyPHP Framework

GenyPHP is a lightweight, easy-to-use PHP framework designed for building web applications quickly and efficiently.

## Installation

1. **Clone or download the Repository**
   ```sh
   git clone https://github.com/bellash13/GenyPHP.git
   ```
Alternatively, you can download the directory and start coding your valuable application
2. **Navigate to the Project Directory**
   ```sh
   cd GenyPHP
   ```

3. **Install Dependencies**
   Make sure you have [Composer](https://getcomposer.org/) installed, then run:
   ```sh
   composer install
   ```

## Usage

1. **Setting Up Routes**
   Define your routes in `App/Routes/routes.php`. Example:
   ```php
   use GenyPhp\Routers\Router;

   $router = new Router();
   $router->add('GET', '/home', 'App\Controllers\HomeController', 'index');
   $router->dispatch();
   ```

2. **Creating Controllers**
   Place your controllers in `App/Controllers`. Example `HomeController.php`:
   ```php
   namespace App\Controllers;
   use GenyPhp\Controllers\Controller;

   class HomeController extends Controller {
       public function index() {
           $data = ['title' => 'Welcome to GenyPHP!'];
           $this->render('index', $data);
       }
   }
   ```

3. **Creating Views with Layouts**
   Store your views in `App/Views`. Example `Home/index.php`:
   ```html
   <h1>Welcome to GenyPHP!</h1>
   <p><?=$title?></p>
   ```
   For layouts, use `App/Views/Shared/layout.php` and include views dynamically:
   ```php
   $this->renderLayout('Shared/layout', 'Home/index', $data);
   ```

4. **Public Directory**
   Access your application through the `public` directory in the `App` folder.

## Roadmap

- Add support for layout view.
- Add database support using Doctrine.
- Add support for REST returning JSON.
- Add authentication support.
- Add authorization support.
- Add attributes usage support.
- Update the readme file.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or create an issue for any bugs or feature requests.

## License

This project is licensed under the MIT License.
