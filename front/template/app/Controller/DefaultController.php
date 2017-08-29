<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	public function index()
	{
		// $this->show('default/index');
		DbFactory::start();

		$competences =\ORM::for_table('t_competences')->find_result_set();
		$experiences =\ORM::for_table('t_experiences')->find_result_set();
		$utilisateur =\ORM::for_table('t_utilisateurs')->where('id_utilisateur','1')->find_one();
		$loisirs =\ORM::for_table('t_loisirs')->find_result_set();

		$formations =\ORM::for_table('t_formations')->order_by_desc('dates_f')->find_result_set();
		$realisations =\ORM::for_table('t_realisations')->find_result_set();

			$this->show('default/index', ['utilisateur' => $utilisateur,'competences' => $competences, 'loisirs' => $loisirs, 'experiences' => $experiences,'formations' => $formations, 'realisations'=> $realisations]);
		}

}
