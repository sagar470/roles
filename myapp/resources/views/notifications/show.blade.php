
<!DOCTYPE html>
<html class="h-full">

<div class="container">
   <ul>
       @forelse($notifications as $notification)
           <li>
               @if($notification->type==='App\Notifications\PaymentReceived')
                   we have received a payment of {{$notification}} from you.
                   @endif
           </li>
           @empty
               <li>you have no unread notifications</li>

       @endforelse

   </ul>

</div>

