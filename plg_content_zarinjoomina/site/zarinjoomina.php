<?php
//If the form is submitted
$a=$_SERVER['PHP_SELF'];
if(isset($_POST['submit']))

 {


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>


<style>
 



 div#p1 {  text-align: center;direction: rtl;
 width:50% ;  background-color: #FFFACD;border-bottom-style: solid;border-style: dotted;
  border-width: thin ;float: right;
}

  div#p2 {  text-align: center;direction: rtl;
 width:48% ;  background-color: #E6E6FA;border-bottom-style: solid;border-style: dotted;
  border-width: thin ;float: left;
}

 div#p3 {  text-align: center;direction: rtl;
 width:100% ;  background-color: #F0F8FF;border-bottom-style: solid;border-style: dotted;
  border-width: thin ;
  
}

div#p4 {   width:48% ; 
 float: left;

}
div#p5 {  
 width:48% ; 
 float: right;

}

</style>




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
              $("div.submit").click(function()
                      {
                   //   var a=$('div#total').html();
                   //   var b=$('input#some').val()  ;
                   //   if (b >1){
                       
                       $('input#TransactionAmount').val(10000);
                    //   }
                    //   else
                    //   {
                    //    $('input#TransactionAmount').val( a);
                        
                       }
                      });
});
</script>


<?php 
defined('_JEXEC') or die('restricted access');

jimport('joomla.plugin.plugin');
class plgContentzarinjoomina extends JPlugin
{
var $path=JPATH_PLUGINS;
var $id;


//------------------------ اتصال به دیتا بیس---------------




//--------------------------تابع اصلی  پلاگین --------------------    


function onPrepareContent(&$article, &$params, $limitstart = 0)
  { 
              



//------------------------------جدا کردن کد از متن اصلی---------------------
                // Simple performance check to determine whether bot should process further
                if($first=strpos($article->text, '{zarinjoomina-') )
                {
                $middle=strpos($article->text, '-',$first);
                  
                $end=strpos($article->text, '}',$middle);
                $pattern = '';
               $replace = '';
                $id=substr($article->text,$middle+1,$end-$middle-1);
                $this->id=$id;
               
               
                
//------------------تولید کد جایگزین---------------------------   
//------------------- فرمت کلی بخش قابل نمایش برای مشتری 
 $replace=" <div > 
 
           <div id='p1'>کد کالا:          ".$this->getdbdata('proid')." </div>
              
            
 
            <div id='p2' >نام کالا:        ".$this->getdbdata('proname')."</div>
              
            
              
 
            <div id='p1' >قیمت:             ".$this->getdbdata('proprice')."</div>
              
            
             
 
            <div id='p2'>قیمت قبلی:        ".$this->getdbdata('prolprice')."</div>
              
            
              
 
             <div id='p3'><div >توضیحات:         ".$this->getdbdata('prodes')."</div>
              
            
              
    
              ";
 if ($this->getdbdata('showperzarinpal')!='0') 
            $replace.= 
                "    
 
            <div  id='p4'>درصد زرین پال :         ".$this->getdbdata('perzarin')."</div>
              
            
              ";       
if ($this->getdbdata('showpermaliat')!='0') 
            $replace.= 
                "    
 
            <div  id='p5' >  درصد مالیات:            ".$this->getdbdata('permaliat')."</div>
              
            
              ";
if ($this->getdbdata('showsendprice')!='0') 
            $replace.= 
                " 
 
            <div id='p4' >  هزینه ارسال :         ".$this->getdbdata('sendprice')."</div>
              
            
              ";                            
                                  
 $replace.="   
 
            <div id='p5' >مبلغ پرداختی:          "."<div id='total'>".$this->getdbdata('total')."</div></div>
              
            
              ";
             
 $replace.="</div></div>";  
   
          
//-------------------پایان بخش قابل نمایش برای مشتری-------------------                 
    $pro_des='<br/>نام محصول: '.$this->getdbdata('proname').'<br/>
   کد محصول: '.$this->getdbdata('proid').'<br/>
   شرح محصول: '.$this->getdbdata('prodes').'<br/>
   قیمت: '.$this->getdbdata('proprice');          
              
$replace.='<div ><center><form action="plugins/content/zarinjoomina/zarin_request.php" method="post" id="TransactionAddForm">
   <input type="hidden" id="TransactionAccountID" value="'.$this->getdbdata('accnumber').'" name="TransactionAccountID">
   <input type="hidden" id="TransactionAmount" value="'.$this->getdbdata('total').'" name="TransactionAmount">
   <input type="hidden" id="TransactionDesc" value="'.$pro_des.'" name="TransactionDesc">
    تعداد :<input type="text" id="some"  name="tedad" value="1">
	ایمیل شما :<input type="text" id="mail"  name="mail" >
	تلفن تماس شما :<input type="text" id="tel"  name="tel" >
   <input type="hidden" id="TransactionRedirectUrl" value="'.$this->getdbdata('redirect').'" name="TransactionRedirectUrl"><br><br>
   <div class="submit" >
    <input alt="ارسال درخواست"  type="image" src="http://www.joomina.ir/joominapay.jpg"/><br/>
    <a href="http://andco.ir"> قدرت گرفته از زرین جومینا</a>
    </div>
   </form></center>
       </div>';              
              
              
              
              
          
    
    $var ="{zarinjoomina-$id}";
    
 
//------------------------------جایگزاری کد در متن اصلی-------------------
   
    $article->text=str_replace($var,$replace,$article->text);
    
      return true;
    }
      
   
}








function getdbdata($cell)

{   
     $prodata=$this->getdata($this->id);
               
     $config=$this->getdata_c(1); 
    
  //---------------------استخراج اطلاعات از دیتابیس------------------
              foreach($prodata[0] as $key[]=>$data[]);
               
             
             
             




             $pro_id     =$data[0];
             $pro_name   =$data[1];
             $pro_price  =$data[2];
             $pro_l_price=$data[3];
             $pro_des    =$data[4];
 
     
              foreach($config[0] as $key1[]=>$datac[]);
              
             $id_c               =$datac[0];
             $acc_number_c       =$datac[1];
             $per_zarin_c        =$datac[2];
             $per_maliat_c       =$datac[3];
             $send_price_c       =$datac[4];
             $s_zarinpal_price_c =$datac[5];
             $s_maliatprice_c    =$datac[6];
             $s_sendprice_c      =$datac[7];
             $s_totalpris_c      =$datac[8];
             $redirect_link_c    =$datac[9];
    
switch ($cell){    
    
        case 'proid':           return $data[0];
                                break;
        case 'proname':         return $data[1];
                                break;
        case 'proprice':        return $data[2];
                                break;
        case 'prolprice':       return $data[3];
                                break;
        case 'prodes':          return $data[4];
                                break;
        case 'idconfig':        return $datac[0];
                                break;
        case 'accnumber':       return $datac[1];
                                break;
        case 'perzarin':        return $datac[2];
                                break;
        case 'permaliat':        return $datac[3];
                                break;
        case 'sendprice':       return $datac[4];
                                break;
        case 'showperzarinpal':  return $datac[5];
                                break; 
        case 'showpermaliat': return $datac[6];
                                break;
        case 'showsendprice':  return $datac[7];
                                break;
        case 'showtotal':       return $datac[8];
                                break;                                    
        case 'redirect':        return $datac[9];
                                break;    
         case 'total':          return round( $pro_price+$pro_price*$per_zarin_c /100+$pro_price * $per_maliat_c/100 + $send_price_c);
                                break; 
        default:                return "-----";    
            }
    
    
    
    
    
    
}





            function getdata($id)
                {
        
                    
                    $db1=&JFactory::getDBO();
                    $query=" SELECT * FROM #__zarinpal where id=$id ";
                    $db1->setQuery($query);
                    $result=$db1->loadObjectList();
                    return $result;
                }
                
                
                //------------------------ اتصال به دیتا بیس---------------
                function getdata_c()
                {
                    
                    
                    $db2=&JFactory::getDBO();
                    $query="select * from #__zarinpal_c where id=1";
                    $db2->setQuery($query);
                    $result=$db2->loadObjectList();
                    return $result;
                }




    


   
}