namespace App\Controller;

class TestController {
    #[Route('/first', 'first' )]
    function index(): Response {
        return $this->render('first/index.html.twig', ['controller_name' => 'TestController', array
            ]);
    }

}