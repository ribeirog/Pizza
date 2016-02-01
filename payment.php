<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Pizza! - Order</title>

    <!-- Compressed Foundation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.css">

    <!-- Styled CSS -->
    <link rel="stylesheet" href="resources/stylesheet/style.css" />

    <!-- Including the fonts -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Including jquery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- Compressed Foundation JavaScript -->
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/foundation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.1.2/js/foundation.reveal.js"></script>
    <script src="resources/js/jquery.card.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>

</head>
<body class="payment payment-page">
    <div class="row">
        <div class="small-12 large-2 columns">
            <br>
            <a href="index.html" >
                <img src="resources/img/logo-2.png" />
            </a>
        </div>
        <div class="small-12 large-10 columns">
            <h2 class="payment-header">Payment</h2>
        </div>
    </div>
    <div class="row">
        <div class="" id="payment-modal">
            <div class="small-12 large-8 columns">
                <h3 class="payment-item">Payment information: </h3>
                <h5 class="payment-area-head">Billing address:</h5>
                <form action="confirmation.php" class="cardInfo" method="post">
                    <div class="row">
                        <div class="small-12 large-8 columns">
                            <input type="text" name="cardAddress" placeholder="Your Address" required>
                        </div>
                        <div class="small-12 large-4 columns">
                            <input type="text" name="cardAddress2" placeholder="Apartment, Room, Building"/>
                        </div>
                        <div class="small-12 large-4 columns">
                            <input type="text" name="cardCity" placeholder="City" required/>
                        </div>
                        <div class="small-12 large-4 columns">
                            <select name="state" required>
                                <option value="">Select your state</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO" selected>Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="small-12 large-4 columns">
                            <input type="text" name="card-zip" placeholder="Zip code" required/>
                        </div>
                        <div class="small-12 large-5 columns" style="margin-top: 20px;">
                            <h5 class="payment-area-head">Card information:</h5>
                            <div class="row">
                                <div class="small-12 large-12 columns">
                                    <input placeholder="Card number" type="text" name="number" required>
                                </div>
                                <div class="small-12 large-12 columns">
                                    <input placeholder="Full name" type="text" name="name" required>
                                </div>
                                <div class="small-12 large-6 columns">
                                    <input placeholder="MM/YY" type="text" name="expiry" required>
                                </div>
                                <div class="small-12 large-6 columns">
                                    <input placeholder="CVC" type="text" name="cvc" required>
                                </div>
                                <div class="small-12 large-12 columns">
                                    <a href="index.html" class="secondary hollow button" style="margin-bottom: 0;">Cancel</a>
                                    <input type="submit" class="pay-button alert button" value="Place my order" style="float: right">
                                </div>
                            </div>
                        </div>
                        <div class="small-12 large-7 columns">
                            <div class="card-wrapper" style="margin-top: 90px;"></div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="small-12 large-4 columns">
                <img src="resources/img/payment-background.png">
            </div>
        </div>
    </div>


<script>
    $(document).ready(function() {
        $('.cardInfo').validate({
            errorElement: 'div',
        });
    });

    new Card({
        form: document.querySelector('form.cardInfo'),
        container: '.card-wrapper'
    });
</script>

</body>
</html>