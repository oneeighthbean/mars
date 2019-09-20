<?php
/**
 * Created by PhpStorm.
 * User: darwinhu
 * Date: 2019/5/22
 * Time: 上午 10:24
 */

function produceProfile($uuid, $name, $desc, $region="Asia Pacific", $country="Indonesia", $expired="2020-06-30"){
    $myObj = new stdClass();
    $myObj->name = $name;
    $myObj->country = $country;
    $myObj->region = $region;
    $myObj->desc = $desc;
    $myObj->expired = $expired;

    if($uuid == "0"){
        $myObj->altitude = "1750-2300m";
        $myObj->process = "水洗";
        $myObj->level = "G1";
        $myObj->variety = "原生種";
        $myObj->flavor = "口感滑順，尾韻花香持久";
        $myObj->uuid = "46b17533-8cc5-48d4-a071-025b5b7522e3";
        $myObj->heatinfo  = [
            [
                "timeline"=>180,
                "temperature"=>72
            ],
            [
                "timeline"=>60,
                "temperature"=>79
            ],
            [
                "timeline"=>60,
                "temperature"=>105
            ],
            [
                "timeline"=>60,
                "temperature"=>121
            ],
            [
                "timeline"=>60,
                "temperature"=>126
            ],
            [
                "timeline"=>60,
                "temperature"=>121
            ],
            [
                "timeline"=>60,
                "temperature"=>121
            ],
            [
                "timeline"=>60,
                "temperature"=>117
            ],
            [
                "timeline"=>60,
                "temperature"=>115
            ],
            [
                "timeline"=>60,
                "temperature"=>121
            ],
            [
                "timeline"=>60,
                "temperature"=>126
            ],
            [
                "timeline"=>60,
                "temperature"=>133
            ],
            [
                "timeline"=>60,
                "temperature"=>136
            ]
        ];
    }
    else if($uuid == "46b17533-8cc5-48d4-a071-025b5b7522e3"){
        $myObj->altitude = "1750-2300m";
        $myObj->process = "水洗";
        $myObj->level = "G1";
        $myObj->variety = "原生種";
        $myObj->flavor = "口感滑順，尾韻花香持久";
        $myObj->uuid = "46b17533-8cc5-48d4-a071-025b5b7522e3";
        // 12 min
        $myObj->heatinfo  = [
            [
                "timeline"=>180,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ],
            [
                "timeline"=>90,
                "temperature"=>210
            ]
        ];
    }
    else if($uuid == "46b17533-8cc5-48d4-a071-025b5b752666"){
        $myObj->altitude = "1750-2300m";
        $myObj->process = "水洗";
        $myObj->level = "G1";
        $myObj->variety = "原生種";
        $myObj->flavor = "口感滑順，尾韻花香持久";
        $myObj->uuid = "46b17533-8cc5-48d4-a071-025b5b752666";
        // 20 min
        $myObj->heatinfo  = [
            [
                "timeline"=>180,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ],
            [
                "timeline"=>130,
                "temperature"=>210
            ]
        ];
    }

    return $myObj;
}


$data = file_get_contents('php://input');
$json = json_decode($data, true);

$defaultuuid = "46b17533-8cc5-48d4-a071-025b5b7522e3";
$otheruuid = "46b17533-8cc5-48d4-a071-025b5b752666";
$uuid=$json['uuid'];
if($uuid === $defaultuuid){
    //$myjsoncontext = produceProfile("mycoffeeing", "this is my coffee");
    $myjsoncontext = produceProfile($defaultuuid,"Testing 100 gram", "this is my test", "My Region", "My Country", "2099-09-30");
    $myJSON = json_encode($myjsoncontext);
    echo $myJSON;
} else if($uuid === $otheruuid) {
    $myjsoncontext = produceProfile($otheruuid, "Testing 200 gram", "this is my test", "My Region", "My Country", "2099-09-30");
    $myJSON = json_encode($myjsoncontext);
    echo $myJSON;
} else {
    echo "ERROR_INVALID_UUID" . $uuid;
}

?>