
<!DOCTYPE html>
<html class="h-full">

    <div class="container">
        <form method="post" action="/payments">

            @csrf

            <button class="btn btn-primary" type="submit" formmethod="POST">makepayment</button>

        </form>
    </div>

