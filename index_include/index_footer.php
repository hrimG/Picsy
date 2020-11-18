<script type="text/javascript" src="public/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="public/js/modules.js"></script>
<script type="text/javascript" src="public/js/login_fn.js"></script>
<script type="text/javascript">
  $(function(){
    $('.index_header > .logo').on('click', function(e){
      window.location.href = "welcome";
    });
    //for replacing illegal characters
    $('.s_username, .s_password, .s_email, .s_firstname, .s_surname').on('keyup', function(e){
      replacer($(this));
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/toxicity"></script>
<script>
    const threshold = 0.9;
    let model;
    toxicity.load(threshold).then(m => {
        model = m;
    }).then(()=>{
        document.querySelectorAll("input").forEach(input=>{
            input.addEventListener("input",(event)=>{
                if(event.data === " ")
                model.classify([input.value.toLowerCase()]).then(predictions => {
                    if(predictions[6].results[0].match){
                      input.value = "";
                      alert('Abusive word detected!');
                    }
                });
            })
        });
        document.querySelectorAll("textarea").forEach(input=>{
            input.addEventListener("input",(event)=>{
                if(event.data === " ")
                model.classify([input.value.toLowerCase()]).then(predictions => {
                    if(predictions[6].results[0].match){ 
                      input.value = "";
                      alert('Abusive word detected!');
                    }
                });
            })
        })
    });
</script>
<noscript>
  <?php include 'needs/sec_no_script.php'; ?>
</noscript>
</body>
</html>

<!-- https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js -->
