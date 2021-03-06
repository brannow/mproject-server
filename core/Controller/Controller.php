<?php
/**
 * Copyright (c) 2016. Benjamin Rannow <rannow@emerise.de>
 * License: MIT
 * Author: Benjamin Rannow <rannow@emerise.de>
 * Project: M-Project
 */

namespace Core\Controller;


use Core\HTTP\Response;

/**
 * Class Controller
 * @package Core\Controller
 */
class Controller
{
    /**
     * @param array $data
     * @return Response
     */
    protected function jsonResponse(array $data = array()) : Response
    {
        $response = new Response(json_encode($data));
        return $response->setType('application/json');
    }

    /**
     * @param string $content
     * @return Response
     */
    protected function response(string $content) : Response
    {
        $response = new Response($content);
        return $response->setType('text/html');
    }
}