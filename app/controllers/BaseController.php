<?php

class BaseController {
    /**
     * Renders a complete view with a header and footer.
     *
     * @param string $viewFile The name of the content view file (e.g., 'home')
     * @param array $data Data to be made available to the view
     */
    protected function render($viewFile, $data = []) {
        extract($data);

        include '../app/views/layouts/header.php';
        include '../app/views/' . $viewFile . '.php';
        include '../app/views/layouts/footer.php';
    }
}