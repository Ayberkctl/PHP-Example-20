    <script type="text/javascript">
        var securty1;
        var onloadCallback = function(){
            securty1 = grecaptcha.render('securty1',{
                'sitekey':'[Google=ReCaptcha=Site=Key]',
                'theme' : 'dark'
            });
        };
    </script> 
    <form action="form.php" method="post">
        <input type="text" name="name" placeholder="name">  <br><br>
        <div id='securty1'> </div><br>
        <button type="reset" onclick='javascript:grecaptcha.reset(securty1);'>Reset</button>
        <button type="submit">submit</button>
    </form>
    

   
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl=tr" async defer> </script>
    
    <!-- <div class="g-recaptcha" data-sitekey="[Google=ReCaptcha=Site=Key]"></div> -->
 