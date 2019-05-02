<?php
namespace Controllers;
//CONTROLADO DAS TASKS PROGRAMADAS
use \Core\Controller;
use \Models\Tasks;

class TasksSchaduledController extends Controller {

	public function index() {

		$t = new Tasks();
		$t->cronSales();
		$t->cronFinances();
	}
}