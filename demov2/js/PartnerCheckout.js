/* 
 Copyright 2021 Elia Payment (https://elia.gg)
 
 Permission is hereby granted, free of charge, to any person obtaining a copy of 
 this software and associated documentation files (the "Software"), to deal in 
 the Software without restriction, including without limitation the rights to 
 use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of 
 the Software, and to permit persons to whom the Software is furnished to do so, 
 subject to the following conditions:
 
 The above copyright notice and this permission notice shall be included in all 
 copies or substantial portions of the Software.
 
 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 PARTICULAR PURPOSE AND NONINFRINGEMENT. 
 IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
 DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, 
 ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 
 DEALINGS IN THE SOFTWARE.
 */

$(document).ready(function ($) {
    //const __ELIA_EXPRESS_PAY_BASE_URL = 'https://developer.elia.gg';
    const __ELIA_EXPRESS_PAY_BASE_URL = 'http://localhost';
    var currency = $('#currency').val();
    var value = $('#Total').val();
    $("#devise").text(currency);
    exchangeRate(currency, value);
    expressCheckoutInit();


    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    }
    ;

    function expressCheckoutInit() {
        eliaExpressPay.onClose(backToStore);
        
        eliaExpressPay.partnerKey = 'nYkiBAdGFY';
        eliaExpressPay.integrationId = '605ba25c2fc0302db1e12a5b';

        eliaExpressPay.pageTitle = 'Elia.gg Express Pay';
        eliaExpressPay.checkoutTitle = '';
        eliaExpressPay.authenticationTitle = 'Authentication';
        eliaExpressPay.paymentTitle = 'Payment';
        eliaExpressPay.paymentReturnTitle = 'Payment Confirmation';

        eliaExpressPay.customCssAddress = __ELIA_EXPRESS_PAY_BASE_URL + '/demov2/css/customcss.css';
        eliaExpressPay.userLogo = __ELIA_EXPRESS_PAY_BASE_URL + '/demov2/img/theme/logo-top-right.png';
        eliaExpressPay.addInputOne = 'false';
        eliaExpressPay.addInputOneTitle = 'Nickname';
        eliaExpressPay.addInputTwo = 'false';
        eliaExpressPay.addInputTwoTitle = 'E-mail';
        eliaExpressPay.paymentMessage = 'Verify your purchase value before confirm';
        eliaExpressPay.confirmationMessage = 'Thanks for your support!';
        eliaExpressPay.urlSuccess = __ELIA_EXPRESS_PAY_BASE_URL + '/demov2/index.php';
        eliaExpressPay.urlCancel = __ELIA_EXPRESS_PAY_BASE_URL + '/demov2/index.php';
        eliaExpressPay.mode = 'sandbox';

        var mode = getUrlParameter('mode');
        if (mode !== null && mode !== undefined) {
            eliaExpressPay.mode = mode;
        }
    }
    
    function backToStore(event) {
        $('#eliaexpresspaycontainer').fadeOut();
    }


    function exchangeRate(currency, value) {
        eliaExpressPay.originalAmount = value;
        eliaExpressPay.originalCurrency = currency;
        var url = 'https://developer.elia.gg/api/ExchangeRate.php?xch=true&currency=' + currency + '&amount=' + value;
        $.get(url, function (response) {
            var value = response.convertedValue;
            $('#convertedTotal').val(value);
            eliaExpressPay.amount = $('#convertedTotal').val();
            if (eliaExpressPay.amount < 1.00) {
                alert("This value is less than USD $1.00, please choose other currency");
            }
        });
    }


    $('#Total').change(function () {
        var currency = $('#currency').val();
        var value = $('#Total').val();
        exchangeRate(currency, value);
    });

    $('#currency').change(function () {
        var currency = $('#currency').val();
        var value = $('#Total').val();
        $("#devise").text(currency);
        exchangeRate(currency, value);
    });
    
    $('#eliaExpressPay').click(function(){
        eliaExpressPay.init('eliaexpresspaycontainer');
    });

    $('#eliaexpresspaycontainer').click(function () {
        $('#eliaexpresspaycontainer').fadeOut();
    });

    $("#show-payment").click(function (e) {
        e.preventDefault();
        $('#eliaExpressPay').fadeIn();
    });
});