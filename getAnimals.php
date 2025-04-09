<?php
$data = '{   "animals":
            [
                {
                    "id":0,
                    "name":"Bob",
                    "species":"chicken",
                    "sex":"male",
                    "breed":"barred rock",
                    "age":12,
                    "photo":"./images/barredRooster.jpg"
                },
                {
                    "id":1,
                    "name":"Henrietta",
                    "species":"chicken",
                    "sex":"female",
                    "breed":"barred rock",
                    "age":10,
                    "photo":"./images/Bob.jpg"
                },
                {
                    "id":2,
                    "name":"Hank",
                    "species":"chicken",
                    "sex":"male",
                    "breed":"red",
                    "age":5,
                    "photo":"./images/red.jpg"
                }
            ]
        }';
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json; charset=utf-8');
	echo json_encode($data);
?>