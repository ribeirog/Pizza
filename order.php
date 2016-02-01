<!DOCTYPE html>
<html>
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
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>

</head>
<body class="payment">
    <div class="row">
        <div class="small-12 large-2 columns">
            <br>
            <a href="index.html" >
                <img src="resources/img/logo-2.png" />
            </a>
        </div>
        <div class="small-12 large-10 columns">
            <h2 class="payment-header">My order</h2>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-6 columns">

            <br><br>
            <div class="callout">
                <h5><b><?php echo $_POST['crust'] ?> pizza with <?php echo $_POST['sauce'] ?> sauce.</b></h5>
                <p>Your pizza comes with <?php echo $_POST['toppings'] . "," . $_POST['veggies']?></p>
                <p><b><?php echo $_POST['total'] ?></b> each.</p>
                <select class="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <a href="index.html" class="delete">Delete.</a>
            </div>

            <div class="row">
                <h3 class="payment-item">Choose the delivery method: </h3>
                <div class="small-12 large-6 columns option-delivery">
                    <label>
                        <div class="callout">
                            <input type="radio" class="carryout" name="mathod" value="carryout">
                            Carryout
                        </div>
                    </label>
                </div>
                <div class="small-12 large-6 columns option-delivery">
                    <label>
                        <div class="callout">
                            <input type="radio" class="deliver" name="mathod" value="deliver" style="margin-bottom: 0;">
                            Delivery <span class="payment-warning">+ $1.50</span>
                        </div>
                    </label>
                </div>
                <div class="small-12 large-12 columns carryout-option" style="display: none">
                    <div class="row">
                        <h3 class="payment-item">Address to carryout: </h3>
                    </div>
                    <p>612 North Some Strees</p>
                    <p>Warrensburg - MO</p>
                    <p>64093</p>
                    <a href="javascript:void(0)" data-open="map" class="hollow button">Get Directions</a>

                    <div class="reveal" id="map" data-reveal>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12445.392089974823!2d-93.73843135!3d38.75572104999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x614854617b5aa280!2sUniversity+of+Central+Missouri!5e0!3m2!1sen!2sbr!4v1454351976115" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <button class="close-button" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="small-12 large-12 columns delivery-option" style="display: none">
                    <div class="row">
                        <h3 class="payment-item">Address to deliver: </h3>
                    </div>
                    <form class="delivery-input-address" action="payment.php">
                        <input placeholder="Address" type="text" name="address" id="deliver-address" required>
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <input placeholder="Apartment, suite, building, floor" type="text" name="address-2">
                            </div>
                            <div class="small-12 large-6 columns">
                                <input placeholder="City" type="text" name="city" id="deliver-city" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <select name="state">
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
                            <div class="small-12 large-6 columns">
                                <input placeholder="ZIP code" type="text" name="zip" id="deliver-zip" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="small-12 large-6 columns">

            <h3 class="payment-item">Total:</h3>
            <table class="stack">
                <tbody>
                <tr>
                    <td>Your order: </td>
                    <td class="firstTotal"><?php echo $_POST['total'] ?></td>
                </tr>
                <tr>
                    <td>Delivery: </td>
                    <td class="hasDelivery"></td>
                </tr>
                <tr>
                    <td>Tax: </td>
                    <td class="calculate-tax"></td>
                </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total: </td>
                        <td class="finalTotal"></td>
                    </tr>
                </tfoot>
            </table>

            <input type="hidden" class="deliveryValue">
            <input type="hidden" class="totalInt" value="<?php echo $_POST['totalInt'] ?>">


            <p><a class="alert button openModalPayment" style="float:right;">Continue to checkout</a></p>

        </div>
    </div>


<script>
    $(document).ready(function() {
        $(document).foundation();

        $('.option-delivery').on('click', function() {
            if ($(".carryout").is(':checked')){
                $('.carryout-option').show();
                $('.delivery-option').hide();
                $('.hasDelivery').html('$0.00');
                $('.deliveryValue').html('0');
            }
            if ($(".deliver").is(':checked')){
                $('.delivery-option').show();
                $('.carryout-option').hide();
                $('.hasDelivery').html('$1.50');
                $('.deliveryValue').html('1.50');
            }
        });

        $('.delivery-input-address').validate({
            errorElement: 'div',
        });
        $('.openModalPayment').click(function() {
            $('.delivery-input-address').submit();
        });

    });

    $('body').on('click', function(){
        var totalTax, realTotal;
        var qnt = $('.quantity').val();
        var firstTotal = $('.totalInt').val();
        firstTotal = firstTotal * Number(qnt);

        $('.firstTotal').html(toUSD(firstTotal));
        var deliveryValue = $('.deliveryValue').text();

        totalTax = (Number(firstTotal) + Number(deliveryValue)) * 0.0836;

        $('.calculate-tax').html(toUSD(totalTax));

        realTotal = Number(totalTax)+Number(firstTotal)+Number(deliveryValue);
        $('.finalTotal').html(toUSD(realTotal));

        function toUSD(number) {
            var number = number.toString(),
                dollars = number.split('.')[0],
                cents = (number.split('.')[1] || '') +'00';
            dollars = dollars.split('').reverse().join('')
                .replace(/(\d{3}(?!$))/g, '$1,')
                .split('').reverse().join('');
            return '$' + dollars + '.' + cents.slice(0, 2);
        };

    });

    new Card({
        form: document.querySelector('form.cardInfo'),
        container: '.card-wrapper'
    });
</script>

</body>
</html>