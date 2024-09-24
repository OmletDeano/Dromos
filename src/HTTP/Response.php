<?php

namespace App\HTTP;

class Response
{
    protected array $headers = [];
    protected mixed $body;

    public function json(array $data, int $statusCode = 200): void
    {
        // Set content type header
        header('Content-Type: application/json', true, $statusCode);
        // Set the response body to the JSON-encoded data
        $this->body = json_encode($data);

        // Output the response
        echo $this->body;
        exit; // End the script after sending response
    }

    public function headers(array $headers): void
    {
        $this->headers = $headers;
    }
}
