<?php
namespace Flowpack\SingleSignOn\DemoInstance\Controller;

/*                                                                                     *
 * This script belongs to the TYPO3 Flow package "Flowpack.SingleSignOn.DemoInstance". *
 *                                                                                     */

use TYPO3\Flow\Annotations as Flow;

/**
 * Standard controller for the SSO DemoInstance package
 *
 * @Flow\Scope("singleton")
 */
class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * Index action (unprotected)
	 *
	 * @return void
	 */
	public function indexAction() {

	}

	/**
	 * Secure action (protected)
	 *
	 * @return void
	 * @Flow\SkipCsrfProtection
	 */
	public function secureAction() {

	}

}

?>