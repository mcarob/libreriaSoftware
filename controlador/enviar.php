<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once($_SERVER['DOCUMENT_ROOT']. '/libreriaSoftware/controlador/PHPMailer/src/Exception.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/libreriaSoftware/controlador/PHPMailer/src/PHPMailer.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/libreriaSoftware/controlador/PHPMailer/src/SMTP.php');

class enviarCorreo{

    public function enviarMensaje($nombre,$para,$asunto,$mensaje){
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
             //$mail->SMTPD=2;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Username='libreriabosquecillo@gmail.com';
            $mail->Password='Aa3057900368';
            $mail->CharSet = 'UTF-8';
            $ruta=$_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/assetsCliente/images/logo/logov2.png';
            $ruta2=$_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/assetsCliente/images/logo/logov2.png';
            $mail->setFrom('libreriabosquecillo@gmail.com','Libreria Bosquecillo');
            $mail->addAddress($para);
            $mail->subject=$asunto;
            $mail->isHTML(true);
            $mail->AddEmbeddedImage($ruta, 'my-photo', 'logo.png'); 
            $mail->AddEmbeddedImage($ruta2, 'my-photo-1', 'logo.PNG'); 
            
            
            
            $mail->Body='
            <!DOCTYPE html>    
            <html>    
            <head>
            
            <title>Push Email</title>
            <link rel="shortcut icon" href="favicon.ico">
            
            <style type="text/css">
            table[name="blk_permission"], table[name="blk_footer"] {display:none;} 
            </style>
            
            <meta name="googlebot" content="noindex" />
            <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"/><link rel="stylesheet" href="/style/dhtmlwindow.css" type="text/css" />
            <script type="text/javascript" src="/script/dhtmlwindow.js">
            /***********************************************
            * DHTML Window Widget- © Dynamic Drive (www.dynamicdrive.com)
            * This notice must stay intact for legal use.
            * Visit www.dynamicdrive.com for full source code
            ***********************************************/
            </script>
            <link rel="stylesheet" href="/style/modal.css" type="text/css" />
            <script type="text/javascript" src="/script/modal.js"></script>
            <script type="text/javascript">
                function show_popup(popup_name,popup_url,popup_title,width,height) {var widthpx = width +  "px";var heightpx = height +  "px";emailwindow = dhtmlmodal.open(popup_name , "iframe", popup_url , popup_title , "width=" + widthpx + ",height="+ heightpx + ",center=1,resize=0,scrolling=1");}
             function show_modal(popup_name,popup_url,popup_title,width,height){var widthpx = width +  "px";var heightpx = height +  "px";emailwindow = dhtmlmodal.open(popup_name , "iframe", popup_url , popup_title , "width=" + widthpx + ",height="+ heightpx + ",modal=1,center=1,resize=0,scrolling=1");}
            var popUpWin=0;
                function popUpWindow(URLStr,PopUpName, width, height){if(popUpWin) { if(!popUpWin.closed) popUpWin.close();}var left = (screen.width - width) / 2;var top = (screen.height - height) / 2;popUpWin = open(URLStr, PopUpName,	"toolbar=0,location=0,directories=0,status=0,menub	ar=0,scrollbar=0,resizable=0,copyhistory=yes,width="+width+",height="+height+",left="+left+", 	top="+top+",screenX="+left+",screenY="+top+"");}
            </script>
                
            <meta content="width=device-width, initial-scale=1.0" name="viewport">    
            <style type="text/css">    
            /*** BMEMBF Start ***/    
            [name=bmeMainBody]{min-height:1000px;}    
            @media only screen and (max-width: 480px){table.blk, table.tblText, .bmeHolder, .bmeHolder1, table.bmeMainColumn{width:100% !important;} }        
            @media only screen and (max-width: 480px){.bmeImageCard table.bmeCaptionTable td.tblCell{padding:0px 20px 20px 20px !important;} }        
            @media only screen and (max-width: 480px){.bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td.tblCell{padding:20px 20px 0 20px !important;} }        
            @media only screen and (max-width: 480px){table.bmeCaptionTable td.tblCell{padding:10px !important;} }        
            @media only screen and (max-width: 480px){table.tblGtr{ padding-bottom:20px !important;} }        
            @media only screen and (max-width: 480px){td.blk_container, .blk_parent, .bmeLeftColumn, .bmeRightColumn, .bmeColumn1, .bmeColumn2, .bmeColumn3, .bmeBody{display:table !important;max-width:600px !important;width:100% !important;} }        
            @media only screen and (max-width: 480px){table.container-table, .bmeheadertext, .container-table { width: 95% !important; } }        
            @media only screen and (max-width: 480px){.mobile-footer, .mobile-footer a{ font-size: 13px !important; line-height: 18px !important; } .mobile-footer{ text-align: center !important; } table.share-tbl { padding-bottom: 15px; width: 100% !important; } table.share-tbl td { display: block !important; text-align: center !important; width: 100% !important; } }        
            @media only screen and (max-width: 480px){td.bmeShareTD, td.bmeSocialTD{width: 100% !important; } }        
            @media only screen and (max-width: 480px){td.tdBoxedTextBorder{width: auto !important;}}    
            @media only screen and (max-width: 480px){table.blk, table[name=tblText], .bmeHolder, .bmeHolder1, table[name=bmeMainColumn]{width:100% !important;} }    
            @media only screen and (max-width: 480px){.bmeImageCard table.bmeCaptionTable td[name=tblCell]{padding:0px 20px 20px 20px !important;} }    
            @media only screen and (max-width: 480px){.bmeImageCard table.bmeCaptionTable.bmeCaptionTableMobileTop td[name=tblCell]{padding:20px 20px 0 20px !important;} }    
            @media only screen and (max-width: 480px){table.bmeCaptionTable td[name=tblCell]{padding:10px !important;} }    
            @media only screen and (max-width: 480px){table[name=tblGtr]{ padding-bottom:20px !important;} }    
            @media only screen and (max-width: 480px){td.blk_container, .blk_parent, [name=bmeLeftColumn], [name=bmeRightColumn], [name=bmeColumn1], [name=bmeColumn2], [name=bmeColumn3], [name=bmeBody]{display:table !important;max-width:600px !important;width:100% !important;} }    
            @media only screen and (max-width: 480px){table[class=container-table], .bmeheadertext, .container-table { width: 95% !important; } }    
            @media only screen and (max-width: 480px){.mobile-footer, .mobile-footer a{ font-size: 13px !important; line-height: 18px !important; } .mobile-footer{ text-align: center !important; } table[class="share-tbl"] { padding-bottom: 15px; width: 100% !important; } table[class="share-tbl"] td { display: block !important; text-align: center !important; width: 100% !important; } }    
            @media only screen and (max-width: 480px){td[name=bmeShareTD], td[name=bmeSocialTD]{width: 100% !important; } }    
            @media only screen and (max-width: 480px){td[name=tdBoxedTextBorder]{width: auto !important;}}    
            @media only screen and (max-width: 480px){.bmeImageCard table.bmeImageTable{height: auto !important; width:100% !important; padding:20px !important;clear:both; float:left !important; border-collapse: separate;} }    
            @media only screen and (max-width: 480px){.bmeMblInline table.bmeImageTable{height: auto !important; width:100% !important; padding:10px !important;clear:both;} }    
            @media only screen and (max-width: 480px){.bmeMblInline table.bmeCaptionTable{width:100% !important; clear:both;} }    
            @media only screen and (max-width: 480px){table.bmeImageTable{height: auto !important; width:100% !important; padding:10px !important;clear:both; } }    
            @media only screen and (max-width: 480px){table.bmeCaptionTable{width:100% !important;  clear:both;} }    
            @media only screen and (max-width: 480px){table.bmeImageContainer{width:100% !important; clear:both; float:left !important;} }    
            @media only screen and (max-width: 480px){table.bmeImageTable td{padding:0px !important; height: auto; } }    
            @media only screen and (max-width: 480px){td.bmeImageContainerRow{padding:0px !important;}}    
            @media only screen and (max-width: 480px){img.mobile-img-large{width:100% !important; height:auto !important;} }    
            @media only screen and (max-width: 480px){img.bmeRSSImage{max-width:320px; height:auto !important;}}    
            @media only screen and (min-width: 640px){img.bmeRSSImage{max-width:600px !important; height:auto !important;} }    
            @media only screen and (max-width: 480px){.trMargin img{height:10px;} }    
            @media only screen and (max-width: 480px){div.bmefooter, div.bmeheader{ display:block !important;} }    
            @media only screen and (max-width: 480px){.tdPart{ width:100% !important; clear:both; float:left !important; } }    
            @media only screen and (max-width: 480px){table.blk_parent1, table.tblPart {width: 100% !important; } }    
            @media only screen and (max-width: 480px){.tblLine{min-width: 100% !important;}}     
            @media only screen and (max-width: 480px){.bmeMblCenter img { margin: 0 auto; } }       
            @media only screen and (max-width: 480px){.bmeMblCenter, .bmeMblCenter div, .bmeMblCenter span  { text-align: center !important; text-align: -webkit-center !important; } }    
            @media only screen and (max-width: 480px){.bmeNoBr br, .bmeImageGutterRow, .bmeMblStackCenter .bmeShareItem .tdMblHide { display: none !important; } }    
            @media only screen and (max-width: 480px){.bmeMblInline table.bmeImageTable, .bmeMblInline table.bmeCaptionTable, td.bmeMblInline { clear: none !important; width:50% !important; } }    
            @media only screen and (max-width: 480px){.bmeMblInlineHide, .bmeShareItem .trMargin { display: none !important; } }    
            @media only screen and (max-width: 480px){.bmeMblInline table.bmeImageTable img, .bmeMblShareCenter.tblContainer.mblSocialContain, .bmeMblFollowCenter.tblContainer.mblSocialContain{width: 100% !important; } }    
            @media only screen and (max-width: 480px){.bmeMblStack> .bmeShareItem{width: 100% !important; clear: both !important;} }    
            @media only screen and (max-width: 480px){.bmeShareItem{padding-top: 10px !important;} }    
            @media only screen and (max-width: 480px){.tdPart.bmeMblStackCenter, .bmeMblStackCenter .bmeFollowItemIcon {padding:0px !important; text-align: center !important;} }    
            @media only screen and (max-width: 480px){.bmeMblStackCenter> .bmeShareItem{width: 100% !important;} }    
            @media only screen and (max-width: 480px){ td.bmeMblCenter {border: 0 none transparent !important;}}    
            @media only screen and (max-width: 480px){.bmeLinkTable.tdPart td{padding-left:0px !important; padding-right:0px !important; border:0px none transparent !important;padding-bottom:15px !important;height: auto !important;}}    
            @media only screen and (max-width: 480px){.tdMblHide{width:10px !important;} }    
            @media only screen and (max-width: 480px){.bmeShareItemBtn{display:table !important;}}    
            @media only screen and (max-width: 480px){.bmeMblStack td {text-align: left !important;}}    
            @media only screen and (max-width: 480px){.bmeMblStack .bmeFollowItem{clear:both !important; padding-top: 10px !important;}}    
            @media only screen and (max-width: 480px){.bmeMblStackCenter .bmeFollowItemText{padding-left: 5px !important;}}    
            @media only screen and (max-width: 480px){.bmeMblStackCenter .bmeFollowItem{clear:both !important;align-self:center; float:none !important; padding-top:10px;margin: 0 auto;}}    
            @media only screen and (max-width: 480px){    
            .tdPart> table{width:100% !important;}    
            }    
            @media only screen and (max-width: 480px){.tdPart>table.bmeLinkContainer{ width:auto !important; }}    
            @media only screen and (max-width: 480px){.tdPart.mblStackCenter>table.bmeLinkContainer{ width:100% !important;}}     
            .blk_parent:first-child, .blk_parent{float:left;}    
            .blk_parent:last-child{float:right;}    
            /*** BMEMBF END ***/    
                
            table[name="bmeMainBody"], body {background-color:#ffffff;}    
             td[name="bmePreHeader"] {background-color:#00ae54;}    
             td[name="bmeHeader"] {background:#ffffff;background-color:#00ae54;}    
             td[name="bmeBody"], table[name="bmeBody"] {background-color:#ffffff;}    
             td[name="bmePreFooter"] {background-color:#ffffff;}    
             td[name="bmeFooter"] {background-color:#ffffff;}    
             td[name="tblCell"], .blk {font-family:initial;font-weight:normal;font-size:initial;}    
             table[name="blk_blank"] td[name="tblCell"] {font-family:Arial, Helvetica, sans-serif;font-size:14px;}    
             [name=bmeMainContentParent] {border-color:#666666;border-width:0px;border-style:none;border-radius:0px;border-collapse:separate;border-spacing:0px;overflow:hidden;}    
             [name=bmeMainColumnParent] {border-color:transparent;border-width:0px;border-style:none;border-radius:0px;}    
             [name=bmeMainColumn] {border-color:transparent;border-width:0px;border-style:none;border-radius:0px;border-collapse:separate;border-spacing:0px;}    
             [name=bmeMainContent] {border-color:transparent;border-width:0px;border-style:none;border-radius:0px;border-collapse:separate;border-spacing:0px;}    
                
            </style>    
            </head>    
            <body marginheight=0 marginwidth=0 topmargin=0 leftmargin=0 style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;min-width: 100%;">    
                
            <table width="100%" cellspacing="0" cellpadding="0" border="0" name="bmeMainBody" style="background-color: #F6F6F6;" bgcolor="#ffffff"><tbody><tr><td width="100%" valign="top" align="center">    
            <table cellspacing="0" cellpadding="0" border="0" name="bmeMainColumnParentTable"><tbody><tr><td name="bmeMainColumnParent" style="border: 0px none transparent; border-radius: 0px; border-collapse: separate;">       
            <table name="bmeMainColumn" class="bmeHolder bmeMainColumn" style="max-width: 600px; border-radius: 0px; border-collapse: separate; border-spacing: 0px; overflow: visible;" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="100%" class="blk_container bmeHolder" name="bmePreHeader" valign="top" align="center" style="color: rgb(102, 102, 102); border: 0px none transparent; background-color: #0B7984;" bgcolor="#00ae54"></td></tr>   <tr><td width="100%" class="bmeHolder" valign="top" align="center" name="bmeMainContentParent" style="border: 0px none rgb(102, 102, 102); border-radius: 0px; border-collapse: separate; border-spacing: 0px; overflow: hidden;">    
            <table name="bmeMainContent" style="border-radius: 0px; border-collapse: separate; border-spacing: 0px; border: 0px none transparent;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td width="100%" class="blk_container bmeHolder" name="bmeHeader" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color:#1870e4" bgcolor="#00ae54"><div id="dv_1" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text"><tbody><tr><td>    
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow"><tbody><tr><td class="tdPart" valign="top" align="center">    
            <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText"><tbody><tr><td valign="top" align="left" name="tblCell" style="padding: 15px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell"><div style="line-height: 150%; text-align: right;"><span style="font-size: 12px; font-family: "Courier New", Courier; color: #ffffff; line-height: 150%;"><span style="text-decoration: underline; line-height: 150%;"><center>Universidad El Bosque</center></span></span></div></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div>
            </td></tr> <tr><td width="100%" class="blk_container bmeHolder bmeBody" name="bmeBody" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff"><div id="dv_15" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_divider" style=""><tbody><tr><td class="tblCellMain" style="padding: 10px 0px;">    
            <table class="tblLine" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-top-width: 0px; border-top-style: none; min-width: 1px;"><tbody><tr><td><span></span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_11" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_image"><tbody><tr><td>    
            <table width="100%" cellspacing="0" cellpadding="0" border="0">  
            </table></td></tr></tbody>    
            </table></div><div id="dv_17" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text"><tbody><tr><td>    
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow"><tbody><tr><td class="tdPart" valign="top" align="center">    
            <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText"><tbody><tr><td valign="top" align="left" name="tblCell" style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell"><div style="line-height: 150%; text-align: center;"><span style="font-size: 16px; font-family: "Arial", Courier; color: #464646; line-height: 150%;"><strong>Hola '.$nombre.'</strong></span>    
            <br><span style="font-size: 14px; font-family: "Arial", Courier; color: #464646; line-height: 150%;">La Libreria Bosquecillo te quiere comunicar algo.</span></div></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_18" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_button" style=""><tbody><tr><td width="20"></td><td align="center">    
            <table class="tblContainer" cellspacing="0" cellpadding="0" border="0" width="100%"><tbody><tr><td height="15"></td></tr><tr><td align="center">    
            </table></td><td width="20"></td></tr></tbody>    
            </table></div><div id="dv_6" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_image"><tbody><tr><td>    
            
            </table></div><div id="dv_8" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_divider" style=""><tbody><tr><td class="tblCellMain" style="padding: 10px 20px;">    
            <table class="tblLine" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-top-width: 0px; border-top-style: none; min-width: 1px;"><tbody><tr><td><span></span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_20" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text"><tbody><tr><td>    
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow"><tbody><tr><td class="tdPart" valign="top" align="center">    
            <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText"><tbody><tr><td valign="top" align="left" name="tblCell" style="padding: 10px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell"><div style="line-height: 200%;"><span style="font-size: 14px; font-family: "Arial", Courier; color: #464646; line-height: 200%;">'.$mensaje.'</span>    
            <br>    
            <br><span style="font-size: 14px; font-family: "Courier New", Courier; color: #464646; line-height: 200%;"></span></div></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div>
            
            </td></tr> <tr><td width="100%">     
            <table class="bmeHolder" name="bmeBody" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff"> <tbody><tr> <td width="100%" valign="top" align="center">   <div>    
            <table class="blk_parent1" cellspacing="0" cellpadding="0" style="max-width: 600px;" width="600" align="center"><tbody><tr><td valign="top" align="center" width="50%" class="tdPart">      
            <table cellspacing="0" cellpadding="0" border="0" width="100%" class="bmeHolder1" style="float:left;" align="left"><tbody><tr><td valign="top" align="center" class="blk_container bmeLeftColumn" name="bmeLeftColumn" style="  " bgcolor=""><div id="dv_4" class="blk_wrapper" style="">    
            <table width="300" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_button"><tbody><tr><td width="20"></td><td align="center">    
            <table class="tblContainer" cellspacing="0" cellpadding="0" border="0" width="100%"><tbody><tr><td height="20"></td></tr><tr><td align="center">    
            
            </table></td><td width="20"></td></tr></tbody>    
            </table></div>
            
            
            </td></tr></tbody>    
            </table></td><td valign="top" align="center" width="50%" class="tdPart">     
            <table cellspacing="0" cellpadding="0" border="0" width="100%" class="bmeHolder1" style="float:right;" align="right"><tbody><tr><td valign="top" align="center" class="blk_container bmeRightColumn" name="bmeRightColumn" style="  " bgcolor=""><div id="dv_21" class="blk_wrapper" style="">    
            <table width="300" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_button" style=""><tbody><tr><td width="20"></td><td align="center">    
            <table class="tblContainer" cellspacing="0" cellpadding="0" border="0" width="100%"><tbody><tr><td height="20"></td></tr><tr><td align="center">    
            
            </table></td><td width="20"></td></tr></tbody>    
            </table></div>
            
            
            </td></tr></tbody>    
            </table>  </td></tr></tbody>    
            </table></div>  </td> </tr> </tbody>    
            </table> </td></tr> <tr><td width="100%" class="blk_container bmeHolder" name="bmePreFooter" valign="top" align="center" style="color: rgb(56, 56, 56); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff"><div id="dv_5" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text"><tbody><tr><td>    
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow"><tbody><tr><td class="tdPart" valign="top" align="center">    
            <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float:left; background-color:transparent;" align="left" class="tblText"><tbody><tr><td valign="top" align="left" name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell"><div style="line-height: 200%;"><span style="font-size: 14px; font-family: "Courier New", Courier; color: #464646; line-height: 200%;"></span></div></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_9" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_divider" style=""><tbody><tr><td class="tblCellMain" style="padding: 10px 20px;">    
            <table class="tblLine" cellspacing="0" cellpadding="0" border="0" width="100%" style="border-top-width: 0px; border-top-style: none; min-width: 1px;"><tbody><tr><td><span></span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_12" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_image"><tbody><tr><td>    
            
            </table></div><div id="dv_7" class="blk_wrapper" style="">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_text"><tbody><tr><td>    
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="bmeContainerRow"><tbody><tr><td class="tdPart" valign="top" align="center" style="background-color:#1870e4;">    
            <table cellspacing="0" cellpadding="0" border="0" width="600" name="tblText" style="float: left; background-color:#1870e4;" align="left" class="tblText"><tbody><tr><td valign="top" align="left" name="tblCell" style="padding: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 400; color: rgb(56, 56, 56); text-align: left;" class="tblCell"><div style="line-height: 150%; text-align: center;"><span style="font-size: 20px; font-family: "Arial", Courier; color: #ffffff; line-height: 150%;"><center>Libreria Bosquecillo</center></span>    
            <br><span style="font-size: 14px; font-family: "Courier New", Courier; color: #ffffff; line-height: 150%;">    
            <br>Acreditación de Alta Calidad</span></div></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div>
            <div id="dv_13" class="blk_wrapper" style="">    
            <table cellspacing="0" cellpadding="0" border="0" name="blk_divider" width="600" class="blk"><tbody><tr><td style="padding: 10px 0px;" class="tblCellMain">    
            <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" class="tblLine"><tbody><tr><td><span></span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div>
            <center><img  alt="PHPMailer" src="cid:my-photo-1">    </center>
            <div id="dv_14" class="blk_wrapper" style="">    
            <table cellspacing="0" cellpadding="0" border="0" style="" name="blk_social_follow" width="600" class="blk"><tbody><tr><td class="tblCellMain" align="center" style="padding-top:20px; padding-bottom:20px; padding-left:20px; padding-right:20px;">    
            <table class="tblContainer mblSocialContain" cellspacing="0" cellpadding="0" border="0" align="center" style="text-align:center;"><tbody><tr><td class="tdItemContainer" style="">    
            <table cellspacing="0" cellpadding="0" border="0" class="mblSocialContain" style="table-layout: auto;"><tbody><tr><td valign="top" name="bmeSocialTD" class="bmeSocialTD"><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->    
            <table cellspacing="0" cellpadding="0" border="0" class="bmeFollowItem" type="facebook" style="float: left; display: block;" align="left"><tbody><tr><td align="left" class="bmeFollowItemIcon" gutter="20" width="24" style="padding-right:20px;height:20px;">    
            <a href="https://www.facebook.com/universidadelbosque/" target=_blank  style="display: inline-block;background-color: #1870e4 ;border-radius: 0px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img    
             src="https://ui.benchmarkemail.com/images/editor/socialicons/fb_btn.png" alt="Facebook" style="display: block; max-width: 114px;" border="0" width="24" height="24"></a></td></tr></tbody>    
            </table><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->    
            <table cellspacing="0" cellpadding="0" border="0" class="bmeFollowItem" type="twitter" style="float: left; display: block;" align="left"><tbody><tr><td align="left" class="bmeFollowItemIcon" gutter="20" width="24" style="padding-right:20px;height:20px;">    
            <a href="https://twitter.com/UElBosque" target=_blank  style="display: inline-block;background-color: #1870e4;border-radius: 0px;border-style: none; border-width: 0px; border-color: rgba(0, 0, 0, 0);" target="_blank"><img    
             src="https://ui.benchmarkemail.com/images/editor/socialicons/tw_btn.png" alt="Twitter" style="display: block; max-width: 114px;" border="0" width="24" height="24"></a></td></tr></tbody>    
            </table><!--[if gte mso 6]></td><td align="left" valign="top"><![endif]-->    
            
            </table></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_10" class="blk_wrapper" style="">    
            <table cellspacing="0" cellpadding="0" border="0" name="blk_divider" width="600" class="blk"><tbody><tr><td style="padding: 10px 0px;" class="tblCellMain">    
            <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top-width: 0px; border-top-style: none; min-width: 1px;" class="tblLine"><tbody><tr><td><span></span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div>
            </td></tr> </tbody>    
            </table></td> </tr>  <tr><td width="100%" class="blk_container bmeHolder" name="bmeFooter" valign="top" align="center" style="color: rgb(102, 102, 102); border: 0px none transparent; background-color: rgb(255, 255, 255);" bgcolor="#ffffff"><div id="dv_3" class="blk_wrapper">    
            <table width="600" cellspacing="0" cellpadding="0" border="0" class="blk" name="blk_permission" style=""><tbody><tr><td name="tblCell" class="tblCell" style="padding:20px;" valign="top" align="left">    
            <table cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr><td name="bmePermissionText" style="text-align:left;" align="left"><span style="font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px;line-height: 140%;">    
            
            </span></td></tr></tbody>    
            </table></td></tr></tbody>    
            </table></div><div id="dv_16" class="blk_wrapper">    
                <table cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr><td name="bmeBadgeText" style="text-align:center; word-break: break-word;" align="center"><span id="spnFooterText" style="font-family: Arial, Helvetica, sans-serif; font-weight: normal; font-size: 11px; line-height: 140%;">Este email fue enviado a: '.$para.' | Este email fue enviado por: Libreria Bosquecillo   
                </table></td></tr></tbody> 
            </table> </td></tr></tbody>    
            </table></td></tr></tbody>    
            </table>    
            </body>    
            </html>';
    if(!$mail->send()){
        return ("error Al enviar el mensaje");
    }else{
        return 1;
    }
          }  catch (Exception $e) {
              print_r($e);
            return 0;
          }
        

    }
    public function enviarMensajeF($nombre,$para,$asunto,$mensaje){
        $mail = new PHPMailer(true);
        #$mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->Username='libreriabosquecillo@gmail.com';
        $mail->Password='Aa3057900368';
        $mail->setFrom('libreriabosquecillo@gmail.com','Feria Laboral Universidad El Bosque');
        $mail->addAddress($para);
        $mail->subject=$asunto;
        $mail->isHTML(true);
        $ruta=$_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/assetsCliente/images/logo/logov2.png';
        $mail->AddEmbeddedImage($ruta, 'my-photo', 'logo.png'); 
        $mail->Body='
                    <div style="display:flex;
                    align-items:center;
                    justify-content:center;">  <img  alt="PHPMailer" src="cid:my-photo">    
                    </div>

                    <h1 align=center> Feria de Oportunidades Universidad El Bosque </h1>
                    <h4> información  </h4>
                    <p>   datos2 <p>
                    <br> 
                    <br>
                    <p> Muy buenas '.$nombre.'  </p>
                    <br>
                    <p>'.$mensaje.'  </p>
                    ';
if(!$mail->send()){
    echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';
}else{
    return 1;
}

    }
}
?>