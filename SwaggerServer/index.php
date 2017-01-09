<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->POST('/eridu-origin/My_Petstore/1.0.0/pet', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing addPet as a POST method ?');
            });


$app->DELETE('/eridu-origin/My_Petstore/1.0.0/pet/{petId}', function(Application $app, Request $request, $pet_id) {
            
            
            return new Response('How about implementing deletePet as a DELETE method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/pet/findByStatus', function(Application $app, Request $request) {
            $status = $request->get('status');    
            
            return new Response('How about implementing findPetsByStatus as a GET method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/pet/findByTags', function(Application $app, Request $request) {
            $tags = $request->get('tags');    
            
            return new Response('How about implementing findPetsByTags as a GET method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/pet/{petId}', function(Application $app, Request $request, $pet_id) {
            
            
            return new Response('How about implementing getPetById as a GET method ?');
            });


$app->PUT('/eridu-origin/My_Petstore/1.0.0/pet', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing updatePet as a PUT method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/pet/{petId}', function(Application $app, Request $request, $pet_id) {
            
            $name = $request->get('name');    $status = $request->get('status');    
            return new Response('How about implementing updatePetWithForm as a POST method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/pet/{petId}/uploadImage', function(Application $app, Request $request, $pet_id) {
            
            $additional_metadata = $request->get('additional_metadata');    $file = $request->get('file');    
            return new Response('How about implementing uploadFile as a POST method ?');
            });


$app->DELETE('/eridu-origin/My_Petstore/1.0.0/store/order/{orderId}', function(Application $app, Request $request, $order_id) {
            
            
            return new Response('How about implementing deleteOrder as a DELETE method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/store/inventory', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing getInventory as a GET method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/store/order/{orderId}', function(Application $app, Request $request, $order_id) {
            
            
            return new Response('How about implementing getOrderById as a GET method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/store/order', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing placeOrder as a POST method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/user', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing createUser as a POST method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/user/createWithArray', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing createUsersWithArrayInput as a POST method ?');
            });


$app->POST('/eridu-origin/My_Petstore/1.0.0/user/createWithList', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing createUsersWithListInput as a POST method ?');
            });


$app->DELETE('/eridu-origin/My_Petstore/1.0.0/user/{username}', function(Application $app, Request $request, $username) {
            
            
            return new Response('How about implementing deleteUser as a DELETE method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/user/{username}', function(Application $app, Request $request, $username) {
            
            
            return new Response('How about implementing getUserByName as a GET method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/user/login', function(Application $app, Request $request) {
            $username = $request->get('username');    $password = $request->get('password');    
            
            return new Response('How about implementing loginUser as a GET method ?');
            });


$app->GET('/eridu-origin/My_Petstore/1.0.0/user/logout', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing logoutUser as a GET method ?');
            });


$app->PUT('/eridu-origin/My_Petstore/1.0.0/user/{username}', function(Application $app, Request $request, $username) {
            
            
            return new Response('How about implementing updateUser as a PUT method ?');
            });


$app->run();
