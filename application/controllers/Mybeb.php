<?php

/**
 * Description of Mybeb
 *
 * @author Brillian Andrie Nugroho Wiguno <brillianandrie@gmail.com>
 */
class Mybeb extends MY_Controller {

    function index() {
        $data = $this->get_meta('welcome');
        $this->render('welcome', $data);
    }

}
