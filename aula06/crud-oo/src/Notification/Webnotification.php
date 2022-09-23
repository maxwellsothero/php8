<?php

class WebNotification
{
    public static function add(string $title, string $type ='success'): void
    {
        render('_components/notification',[
            'type' =>$type,
            'title'=>$title,
                ]);
    }
}

   