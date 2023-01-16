<?php

function sendDiscord($message) {

            $webhookurl = "https://discordapp.com/api/webhooks/786321936874864690/ubCUTxPNm-UErwYZ65Bk2urRuyCWjMb8NIdRzYF2TKxORUYM_kVieQ148okgntxbfOVR";
            
            $json_data = json_encode([
                    
                    "content" => $message
               
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
            
            
            $ch = curl_init( $webhookurl );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt( $ch, CURLOPT_POST, 1);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt( $ch, CURLOPT_HEADER, 0);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
            
            $response = curl_exec( $ch );
            curl_close( $ch );

}


function sendDiscord1($message) {

            $webhookurl = "https://discord.com/api/webhooks/756360640767066205/8h8sXX7US_I4g4Y0pE9kiU-mYNanHFcxAK1z-G0Mc4LDdlZYmopacteHZuipsjRY5Zoh";
            
            $json_data = json_encode([
                    
                    "content" => $message
               
            ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
            
            
            $ch = curl_init( $webhookurl );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
            curl_setopt( $ch, CURLOPT_POST, 1);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt( $ch, CURLOPT_HEADER, 0);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
            
            $response = curl_exec( $ch );
            curl_close( $ch );

}


function username_to_uuid($username)
{
    $profile = username_to_profile($username);
    if (is_array($profile) and isset($profile['id']))
    {
        return $profile['id'];
    }
    return false;
}

function username_to_profile($username)
{
    if (is_valid_username($username))
    {
        $json = file_get_contents('https://api.mojang.com/users/profiles/minecraft/' . $username);
        if (!empty($json))
        {
            $data = json_decode($json, true);
            if (is_array($data) and !empty($data))
            {
                return $data;
            }
        }
    }
    return false;
}

function uuid_to_username($uuid)
{
    $uuid = minify_uuid($uuid);
    if (is_string($uuid))
    {
        $json = file_get_contents('https://api.mojang.com/user/profiles/' . $uuid . '/names');
        if (!empty($json))
        {
            $data = json_decode($json, true);
            if (!empty($data) and is_array($data))
            {
                $last = array_pop($data);
                if (is_array($last) and isset($last['name']))
                {
                    return $last['name'];
                }
            }
        }
    }
    return false;
}

function is_valid_username($string)
{
    return is_string($string) and strlen($string) >= 2 and strlen($string) <= 16 and ctype_alnum(str_replace('_', '', $string));
}

function minify_uuid($uuid)
{
    if (is_string($uuid))
    {
        $minified = str_replace('-', '', $uuid);
        if (strlen($minified) === 32)
        {
            return $minified;
        }
    }
    return false;
}

function format_uuid($uuid)
{
    $uuid = minify_uuid($uuid);
    if (is_string($uuid))
    {
        return substr($uuid, 0, 8) . '-' . substr($uuid, 8, 4) . '-' . substr($uuid, 12, 4) . '-' . substr($uuid, 16, 4) . '-' . substr($uuid, 20, 12);
    }
    return false;
}


$emote = $_GET['emote'];
$uuid = $_GET['uuid'];

$array = array("emote_woo_dance", "emote_oh_na_na_na", "emote_shuffle", "emote_renegade", "emote_say_so", "emote_savage", "emote_hit_it_fergie", "emote_arm_pump", "emote_rockstar", "emote_take_the_l", "emote_wap", "emote_toosie_slide", "emote_party_girl", "emote_woo_walk", "emote_smoke", "emote_kick_up", "emote_rko", "emote_ronaldo", "emote_head_spin", "emote_big_bank");

if (in_array($emote, $array)) {
$mcname = uuid_to_username($uuid) . " just opened a crate and won a rare " . $emote . " emote!";
sendDiscord($mcname);
} else {
$mcname = uuid_to_username($uuid) . " just opened a crate and won a " . $emote . " emote!";
sendDiscord1($mcname);    
}
?>