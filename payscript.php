<script>
  function MakePayment(){
    var name=abh;
    var amount=<?php echo 100 ?>;
    var uid=<?php echo 1 ?>;
    var options = {
    "key": "rzp_test_MgEbrzmbI65r5q", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": name,
    "description": "test transaction",
    "image": "http://localhost/obss/razorpay/obss.png",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
       jQuery.ajax({
         type:"POST",
         url:"payment.php",
         data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name+"&uid="+uid,
        success:function(result)
        {
           window.location.href="success.php?uid=<?php echo $uid ?>";
        }
         
        });
    },
    "prefill": {
        "name": "<?php echo "abhijith";?>" ,
        "email": "<?php echo "caabhijith78@gmail.com";?>",
        "contact": "<?php echo "9947528599";?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#6f68e3"
    }
};
var rzp1 = new Razorpay(options);
rzp1.open();

}
</script>