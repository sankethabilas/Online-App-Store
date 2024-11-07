<!DOCTYPE html>

<head>
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/payment.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>
<body>
    
   
    <div class="container">
        <h2>Payment Form</h2>
        <form method="post" action="payment_insert.php" id="payment-form">
        <label for="bank-select">Select Bank</label>
            <select id="bank-select" name="bank_select" required>
          
                <option value="">Select your bank</option>
                <option value="bank-of-ceylon">Bank of Ceylon</option>
                <option value="commercial-bank">Commercial Bank</option>
                <option value="hatton-national-bank">Hatton National Bank</option>
                <option value="sampath-bank">Sampath Bank</option>

            </select>

            <label for="card-number">Card Number </label>
            <input type="text" id="card-number" name="card_number" placeholder="0000 0000 0000 0000"  required>

            <label for="name-on-card">Name on Card</label>
            <input type="text" id="name-on-card" name="nameon_card" placeholder="Your Name" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Your Address" required>

            <label for="zip-code">ZIP Code</label>
            <input type="text" id="zip-code" name="zip_code" placeholder="ZIP Code" required>
            
            <div class="expiry-cvv">
                <div>
                    <label for="expiration-date">Expiration Date</label>
                    <input type="text" id="expiration-date" name="expiration_date" placeholder="MM/YY" required>
                </div>
                <div>
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="123"required>
                </div>
            </div>

            <div class="buttons">
                <button type="submit" id="pay-now">Pay Now</button>
                <button type="reset" id="cancel">Cancel</button>
                
            </div>
        </form>
        <script>
            document.getElementById('payment-form').addEventListener('submit', function(event) 
            {
            if (!confirm ('Are you sure you want to submit the payment?'))
             {
                event.preventDefault();
             }
            });
            </script>
        
        
       
</body>
</html>