<x-mail::message> 
    # Solicitud de modificación de puntuaciones
    Usted ha hecho una modificación de puntuaciones el {{$date}} con los siguientes datos:
    Gimnasta: {{$gymnast}}
    Evento: {{$event}}
    Ronda: {{$round}}
    Aparato: {{$apparatus}}

    Por favor espere a que los administradores aprueben/rechacen su petición.

    Atte: {{config('app.name')}}
</x-mail::message>