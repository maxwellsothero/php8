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

    public static function del(string $title, string $type ='danger'): void
    {
        render('_components/notification',[
            'type' =>$type,
            'title'=>$title,
                ]);
    }

    public static function edit(string $title, string $type ='warning'): void
    {
        render('_components/notification',[
            'type' =>$type,
            'title'=>$title,
                ]);
    }
}

   