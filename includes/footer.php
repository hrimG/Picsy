<script type="text/javascript" src="<?php echo DIR; ?>/public/js/autosize.js"></script>
<!-- <script src="//twemoji.maxcdn.com/twemoji.min.js"></script> -->
<script type='text/javascript' src="<?php echo DIR; ?>/public/js/emoji.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/perfectScrollbar.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/wookmark.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/text_figures.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/modules.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/prompt_fn.js"></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/login_fn.js"></script>
<script type="text/javascript" src='<?php echo DIR; ?>/public/js/post_partial.js'></script>
<script type="text/javascript" src='<?php echo DIR; ?>/public/js/comment_partial.js'></script>
<script type="text/javascript" src='<?php echo DIR; ?>/public/js/settings_partial.js'></script>
<script type="text/javascript" src='<?php echo DIR; ?>/public/js/mssg_partial.js'></script>
<script type="text/javascript" src='<?php echo DIR; ?>/public/js/group_partial.js'></script>
<script type="text/javascript" src="<?php echo DIR; ?>/public/js/master.js"></script>
<noscript>
  <?php include 'needs/sec_no_script.php'; ?>
</noscript>
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
                model.classify([input.value]).then(predictions => {
                    if(predictions[6].results[0].match) input.value = "";
                });
            })
        })
    });
</script>
</body>
</html>
