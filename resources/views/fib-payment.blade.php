<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #56b89d;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 1rem;
        }

        header img {
            height: 50px;
            margin-right: 1rem;
            padding-left: 50px;
            padding-right: 30px;
        }

        main {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 5rem;
            text-align: center;
            border-radius: 2px;
        }

        .container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 3rem;

        }

        .container h2 {
            margin-top: 0;
            margin-bottom: 2rem;
        }

        .container p {
            margin-bottom: 2rem;
        }

        .container a {
            background-color: #56b89d;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 2px;
            cursor: pointer;
            text-decoration: none;
        }
        .container a:link { text-decoration: none; }
        .container a:hover {
            background-color: #555;
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    {{-- <img width="100"   src="../Images/fib_payment.svg"/> --}}
    <h3>FIB Payment</h3>
</header>
<main>
    <div class="container">
        <img src="{{$payment->qrCode}}" alt="Placeholder Image">
        <h2>{{$payment->readableCode}}</h2>
        <h4>Total Payment : {{$amount}} IQD</h4>
        <p id="countdown"></p>
        <p>Scan the QR code using your mobile device to make a payment. <br>Once the payment is accepted, you will receive a confirmation message.</p>
        <a class="btn btn-block click-if-alone" href="{{route('subscriptions')}}">Back</a>
    </div>



</main>
<script>

    function pollPaymentStatus( timeoutSeconds) {

        var countdownElement = document.getElementById('countdown');
        var interval = setInterval(function() {
            fetch(`{{route('fib_payment.payment.check',['paymentId' =>$payment->paymentId,'token'=>$token])}}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'finished') {                       
                        clearInterval(interval);
                        window.location.href = '{{route("fib_payment.payment.callback")}}'

                    }
                });
        }, 3000); // Poll every 3 seconds

        var startTime = Date.now();
        var countdownInterval = setInterval(function() {
            var timeLeft = timeoutSeconds - Math.floor((Date.now() - startTime) / 1000);
            if (timeLeft < 0) {
                clearInterval(countdownInterval);
              //  alert('Polling has expired!');
                window.location.href = '{{route("subscriptions")}}'

                // Redirect to main page or do other actions
            } else {
                var secondsLeft = timeLeft % 60;
                var minutesLeft = Math.floor(timeLeft / 60);
                countdownElement.textContent = `Time left: ${minutesLeft}:${secondsLeft.toString().padStart(2, '0')}`;
            }
        }, 1000); // Update countdown timer every 1 second
    }
    pollPaymentStatus( 320);
</script>


</body>
</html>
