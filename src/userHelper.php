<?php

function getEmailById($users, $id)
{
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user['email'];
        }
    }
    return null;
}
