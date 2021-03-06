<?PHP
   //DEFAULT EYEOS CALCULATOR: ORIGINAL DEVELOPER: Hans B PUFAL.

   if (! empty ($SYSipcmsg)) {
      if (0 === strpos (strtolower ($SYSipcmsg), 'mem='))
         $_SESSION['apps'][$SYSipcapp]['state.mem'] = trim (substr ($SYSipcmsg, 4));
      elseif (0 === strpos (strtolower($SYSipcmsg), 'disp=')) {
         $_SESSION['apps'][$SYSipcapp]['state.dp'] = trim (substr ($SYSipcmsg, 5,1));
         $_SESSION['apps'][$SYSipcapp]['state.disp'] = trim (substr ($SYSipcmsg, 6));
      } else
         error_log ("E $SYSipcapp bad message : " . $SYSipcmsg);
      return;
   }

   if (!defined ('USR'))
      return;

   function eyeCalc ($eyeapp, $appinfo) {

      sysCallRegister ($eyeapp, 'sys/ipc');	

   echo "    <div style='margin-left:5px; margin-top:20px; overflow: hidden;' >
    <table>
    <tr>
      <td height='49' width='203' colspan='6' align='right'>
	<div id='display' style='position:absolute; left:7px; top:7px; width:205px; height:49px; background: url(".findGraphic('','back2.png')."); z-index: 1; color:#999999; font-weight:bold; font-size: 15pt; background-repeat: no-repeat;'>0</div>
	&nbsp;
	<div id='memory' style='position:relative; left:-8px; top:-19px; color:#AAAAAA; font-size:70%; z-index: 3;'>M = 0</div> 
      </td>
    </tr>
    <tr>
      <td> <img alt='S' onclick='eyeCalcKey(\"S\");' src='".findGraphic('','s.png')."' />  </td>
      <td> <img alt='R' onclick='eyeCalcKey(\"R\");' src='".findGraphic('','r.png')."' />  </td>
      <td> <img alt='%' onclick='eyeCalcKey(\"%\");' src='".findGraphic('','percent.png')."' />  </td>
      <td><img alt='/' onclick='eyeCalcKey(\"/\");' src='".findGraphic('','div.png')."' /> </td>
    </tr>

    <tr>
      <td><img alt='7' onclick='eyeCalcKey(\"7\");' src='".findGraphic('','num7.png')."' /> </td>
      <td><img alt='8' onclick='eyeCalcKey(\"8\");' src='".findGraphic('','num8.png')."' /> </td>
      <td><img alt='9' onclick='eyeCalcKey(\"9\");' src='".findGraphic('','num9.png')."' /> </td>
      <td><img alt='/' onclick='eyeCalcKey(\"*\");' src='".findGraphic('','mult.png')."' /> </td>
    </tr>
    
    <tr>
      <td><img alt='4' onclick='eyeCalcKey(\"4\");' src='".findGraphic('','num4.png')."' /> </td>
      <td><img alt='5' onclick='eyeCalcKey(\"5\");' src='".findGraphic('','num5.png')."' /> </td>
      <td><img alt='6' onclick='eyeCalcKey(\"6\");' src='".findGraphic('','num6.png')."' /> </td>
      <td><img alt='*' onclick='eyeCalcKey(\"-\");' src='".findGraphic('','menys.png')."' /> </td>
    </tr>

    <tr>
      <td><img alt='1' onclick='eyeCalcKey(\"1\");' src='".findGraphic('','num1.png')."' /> </td>
      <td><img alt='2' onclick='eyeCalcKey(\"2\");' src='".findGraphic('','num2.png')."' /> </td>
      <td><img alt='3' onclick='eyeCalcKey(\"3\");' src='".findGraphic('','num3.png')."' /> </td>
      <td><img alt='-' onclick='eyeCalcKey(\"+\");' src='".findGraphic('','mes.png')."' /> </td> 
    </tr>
  </table>
<table>
<tr>
  <td><img alt='0' onclick='eyeCalcKey(\"0\");' src='".findGraphic('','num0.png')."' /> </td>

  <td><img alt='=' onclick='eyeCalcKey(\"=\");' src='".findGraphic('','igual.png')."' /> </td>
  <td><img alt='+' onclick='eyeCalcKey(dp);' src='".findGraphic('','coma.png')."' /> </td>
</tr>
</table>
    </div> 
<script>
   var display = ".(empty ($appinfo['state.disp']) ? 0 : $appinfo['state.disp'])."; 
   var mem = ".(empty ($appinfo['state.mem']) ? 0 : $appinfo['state.mem']).";
   var dp = '".((empty ($appinfo['state.dp']) || ($appinfo['state.dp'] != ',')) ? '.' : ',')."';
   var eyeApp = '$eyeapp';

   function eyeCalcKeyPress (e) {
      if (topapp == document.getElementById ('$eyeapp')) {
         if (window.event)
            e = window.event;
         eyeCalcKey (String.fromCharCode (e.which));
         e.preventDefault();
      }
   }

   addEvent (window, 'load', 
      function () {xAddEventListener ('$eyeapp', 'keypress', eyeCalcKeyPress, false)});
   
   eyeCalcKey ('='); 
</script>
";
   }
   
   $appfunction = 'eyeCalc';
?>
