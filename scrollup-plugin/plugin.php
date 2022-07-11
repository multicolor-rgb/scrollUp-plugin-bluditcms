<?php

    class scrollUpPlugin extends Plugin {

        public function init(){
            $this->dbFields = array(
        'color'=> '',
        'size'=> '', 
        'icon'=>'',
        'mobile'=>'',
        'invert'=>'',
        'border'=>'',

            );
        }
    
        public function  siteHead(){
 
            include($this->phpPath().'php/scrollup.php');

        }

        public function form(){

            $html = '

            <p>scrollup color</p>
            
            <input type="color" value="'.$this->getValue('color').'" class="form-control form-color" name ="color">

            <br>
            
            <p>scrollup size</p>
            
            <select name="size">

            <option value="40" '.($this->getValue('size')==="40"?"selected":"").'>40px</option>
            <option value="50" '.($this->getValue('size')==="50"?"selected":"").'>50px</option>
            <option value="60" '.($this->getValue('size')==="60"?"selected":"").'>60px</option>

            </select>

<br>

            <p> Choose icon</p>
            
            <select name="icon">

            <option value="1" '.($this->getValue('icon')==="1"?"selected":"").'>Type 1</option>
            <option value="2" '.($this->getValue('icon')==="2"?"selected":"").'>Type 2</option>
            <option value="3" '.($this->getValue('icon')==="2"?"selected":"").'>Type 3</option>
            <option value="4" '.($this->getValue('icon')==="4"?"selected":"").'>Type 4</option>
           
            <option value="5" '.($this->getValue('icon')==="5"?"selected":"").'>Type 5</option>
            <option value="6" '.($this->getValue('icon')==="6"?"selected":"").'>Type 6</option>
            <option value="7" '.($this->getValue('icon')==="7"?"selected":"").'>Type 7</option>
            <option value="8" '.($this->getValue('icon')==="8"?"selected":"").'>Type 8</option>
            <option value="9" '.($this->getValue('icon')==="9"?"selected":"").'>Type 9</option>

            </select>

<br>
            <p>Example icon</p>
            <div class="col-md-12 border bg-light mt-3">

            
            <div class="row">

            <div class="col-md-4 my-3">
            <p style="text-align:center;" class="h5">1.</p>
         <img src="'.$this->domainPath().'/img/up1.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">2.</p>
         <img src="'.$this->domainPath().'/img/up2.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">3.</p>
         <img src="'.$this->domainPath().'/img/up3.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">4.</p>
         <img src="'.$this->domainPath().'/img/up4.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">5.</p>
         <img src="'.$this->domainPath().'/img/up5.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">6.</p>
         <img src="'.$this->domainPath().'/img/up6.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">7.</p>
         <img src="'.$this->domainPath().'/img/up7.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>

         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">8.</p>
         <img src="'.$this->domainPath().'/img/up8.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>


         <div class="col-md-4 my-3">
         <p style="text-align:center;" class="h5">9.</p>
         <img src="'.$this->domainPath().'/img/up9.svg" style="width:30px;height:30px;display:block;margin:0 auto;">
         </div>
            </div>

            </div>


<br>
            <p> Invert color icon</p>
            
            <select name="invert">

            <option value="100%" '.($this->getValue('invert')==="100%"?"selected":"").'>Yes</option>
            <option value="0" '.($this->getValue('invert')==="0"?"selected":"").'>No</option>

            </select>

<br>

<p>Border</p>
<select name="border">

<option value="border:solid 1px #000" '.($this->getValue('border')==="border:solid 1px #000"?"selected":"").'>Border dark</option>
<option value="border:solid 1px #fff" '.($this->getValue('border')==="border:solid 1px #fff"?"selected":"").'>Border light</option>
<option value="border:none" '.($this->getValue('border')==="border:none"?"selected":"").'>none</option>

</select>


<br>
            <p> Show on mobile</p>
            
            <select name="mobile">

            <option value="flex" '.($this->getValue('mobile')==="flex"?"selected":"").'>Yes</option>
            <option value="none" '.($this->getValue('mobile')==="none"?"selected":"").'>No</option>

            </select>



<div class="bg-light col-md-12 my-3 py-3 d-block border">
      
<p>If you want support my work, and you want saw new plugins:) </p>

<a href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif"  />
</a>

</div>
            ';

            return $html;


        }
    }
?>