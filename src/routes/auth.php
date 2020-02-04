<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Firebase\JWT\JWT;

$app->post('/auth', function (Request $request, Response $response) {

    $exp = new DateTime("now +2 hours");
    $payload = array(
        "exp" => $exp->getTimeStamp(),
        "user_id" => 25
    );

    $jwt = JWT::encode($payload, getenv("SECRET_KEY"));
    return $response
        ->withJson([
            "status" => true,
            "token" => $jwt
        ], 200);

});