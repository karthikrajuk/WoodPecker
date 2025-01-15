
<style>
	 body {
                font-family: hkg;
                color: #444444;
				background:White;
                overflow-x: hidden;
            }
			h2{
				    font-family: -webkit-pictograph;
    font-size: 28px;
    margin-left: 16%;
    color: #f4fbf7;
    margin-top: 16%;
    font-weight: 700;
    box-shadow: black;
    box-shadow: 0px 0px 30px rgb(234 236 244 / 25%);
    padding: 50px;
    float: left;
    background: #817d83a6;
    text-align: center;
			}
</style>

<?php 


    $to = "karthik.r@softcons.net"; // this is your Email address
   
    //$to = "akshara.atur@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['first-name'];
    
    $subject = "Inquiry";
  
    $message = $_POST['message'] . "\n\nFrom\n" .$name;
   

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    
    
   
    
    if(mail($to,$subject,$message,$headers)){
    echo "<h2>Success!<br><br>
    Mail Sent. Thank you " . $name . ". We will get in touch with you shortly.<br><br>
    Thank you!</h2>";
    header( "Refresh: 2;url=index.html" );
    }else
    {
        echo "<h2>Mail Not Sent. Please check your email id.</h2>";
    header( "Refresh: 2;url=index.html" );
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>