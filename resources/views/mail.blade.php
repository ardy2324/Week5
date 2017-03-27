<!DOCTYPE html>
<html>
    <head>
        <title>
            Mailer Test
        </title>
    </head>
    <body>
        <form action="send_email" method="post">
            {{ csrf_field() }}
            Email<input type="email" name="email">
            Content <textarea name="content" rows="5"></textarea>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>