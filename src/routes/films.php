<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/film/{film_id}', function (Request $request, Response $response, array $args) {

    // Get params
    $film_id = $args['film_id'];

    $film = $this->db->query("SELECT * FROM films WHERE id = $film_id ")->fetch();

    return $response->withJson($film, 200);

});

$app->post('/films', function (Request $request, Response $response) {

    // Get post data
    $data = $request->getParsedBody();

    return $response->withJson($data, 200);

});
