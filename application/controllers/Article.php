<?php

/**
 * Description of Article
 *
 * @author Brillian Andrie Nugroho Wiguno <brillianandrie@gmail.com>
 */
class Article extends MY_Controller {

    function show_article($title) {
        $data = $this->get_meta($title);
        $this->render(strtolower($title), $data);
    }

}
