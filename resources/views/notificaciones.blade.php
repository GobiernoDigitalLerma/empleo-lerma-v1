<!DOCTYPE html>
<html>
    <head>
        <title>Notificaciones</title>
    </head>
    <body>
        <h1>Notificaciones</h1>
        @foreach ($notifications as $notification)
            <div>
                <p>{{ $notification->data['message'] }}</p>
                <p>Leída: {{ $notification->read_at ? 'Sí' : 'No' }}</p>
            </div>
        @endforeach
    </body>
</html>
