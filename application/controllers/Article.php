<?php

/**
 * Description of Article
 *
 * @author Brillian Andrie Nugroho Wiguno <brillianandrie@gmail.com>
 */
class Article extends MY_Controller {

    function show_article(...$paths) {
        $path = implode('/', $paths);
        $data = $this->get_meta($path);
        $this->render(strtolower($path), $data);
    }

}
