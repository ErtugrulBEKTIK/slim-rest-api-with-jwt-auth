<?php
$app->add(new \Slim\Middleware\JwtAuthentication([
    "path" => "/",
    "passthrough" => "/auth",
    "secret" => getenv("SECRET_KEY"),
    "callback" => function ($request, $response, $arguments) use ($container) {
        $container["jwt"] = $arguments["decoded"];
    },
    "error" => function ($response, $response, $arguments) {
        $data["status"] = false;
        $data["message"] = $arguments["message"];
        return $response->withJson($data, 401);
    }
]));