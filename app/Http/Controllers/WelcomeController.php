<?php App\Http\Controlers;

class WelcomeController extends Controller {

    public function index() {

        $items = array(
            $items => [
                'Pack luggage',
                'Go to airpot',
                'Arrive in Penang'
            ];
            )

        return view('welcome');
    }
}