
<style>
html,body{
    scroll-behavior: smooth;
}
.scrollup{
    position: fixed;
    z-index: 88;
    bottom: 10px;
    right:10px;
    background: <?php echo $this->getValue('color');?>;
    width:<?php echo $this->getValue('size');?>px;
    height:<?php echo $this->getValue('size');?>px;
    padding: 5px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 250ms linear;
  transform: translate(100px,0);
  <?php echo $this->getValue('border');?>
}

.scrollup:hover{
    box-shadow: 1px 1px 10px rgba(0, 0,0,0.1);
}

.scrollup img{
    width: 90%;
    height: 90%;
    filter:invert(<?php echo $this->getValue('invert');?>);
}

@media(max-width:960px){

    .scrollup{
        display:<?php echo $this->getValue('mobile');?>
    }

}

</style>

<a href="#" class="scrollup">
    <img src="<?php echo $this->domainPath().'/img/up'.$this->getValue('icon').'.svg';?>" alt="">
</a>


<script>
    window.addEventListener('scroll',()=>{
        
        if(window.scrollY >=100){
            document.querySelector('.scrollup').style.transform = 'translate(0,0)'
        }else{
            document.querySelector('.scrollup').style.transform = 'translate(100px,0)'

        }

    })
</script>