<?php
	
	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;

	use Symfony\Component\HttpFoundation\Request;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller {
		/**
		 * @Route("/blog", name="index")
		 */		
		public function LoginAction(Request $request)
		{
			$nome = $request->request->get ('nome');
			$idade = $request->request->get ('idade');
			$senha = $request->request->get ('senha');

		if($nome == 'Vanessa' && $idade == '18' && $senha == '123'){
				return $this-> redirectToRoute (
					'home_page', array ('request' => $request),
					307);
			}
			
			return $this->render(
				'blog/index.html.php', array()
				);		
		}
		/**
		 * @Route("/home", name="home_page")
		 */		
		public function homeAction()
		{
			$request = Request::createFromGlobals ();
			$nome = $request->request->get ('nome');
			$idade = $request->request->get ('idade');
			$senha = $request->request->get ('senha');

			return $this->render (
				'blog/home.html.php',
				array('nome'=>$nome, 'idade'=>$idade, 'senha'=>$senha));
		}

			
		
			
		}

?>