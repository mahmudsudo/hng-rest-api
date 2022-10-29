<?php

class ApiController
{
    public function __construct(public ApiGateway $gateway)
    {
    }
    
    public function processRequest(string $method): void
    {
        
            
            $this->processCollectionRequest($method);
            
        
    }
    
    
    
    public function processCollectionRequest(string $method)
    {
        switch ($method) {
            case "GET":
                echo json_encode($this->gateway->getAll());
               return json_encode($this->gateway->getAll());
                break;
                
            case "POST":
                
                echo "not found";
                break;
            
            default:
                http_response_code(405);
                header("Allow: GET, POST");
        }
    }
    
    // private function getValidationErrors(array $data, bool $is_new = true): array
    // {
    //     $errors = [];
        
    //     if ($is_new && empty($data["name"])) {
    //         $errors[] = "name is required";
    //     }
        
    //     if (array_key_exists("size", $data)) {
    //         if (filter_var($data["size"], FILTER_VALIDATE_INT) === false) {
    //             $errors[] = "size must be an integer";
    //         }
    //     }
        
    //     return $errors;
    // }
}









