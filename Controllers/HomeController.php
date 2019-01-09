<?php

include('Models/Home.php');

// //On affiche le texte de départ
// $upload_status = "Veuillez ajouter un fichier";

// //On va chercher dans la base de données tous les fichiers. Le résultat est sous forme de tableau à 4 colonnes :
// // id_fichier, nom, codeg, lien.
// $all_files = getAllFiles();

// // On crée une variable tableau qui va se remplir avec les codeg obtenus au-dessus.
// $codegverif = [];
// foreach ($all_files as $value) {
//     //array_push sert à ajouter à la fin du tableau chaque élément dans le foreach.
//     array_push($codegverif, $value['codeg']);
// }

// //cette fonction va générer un code aléatoire
// function generateCode(){
//     $characts = 'abcdefghijklmnopqrstuvwxyz'; 
//     $characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';	
//     $characts .= '1234567890'; 
//     $code = ''; 

//     for($i=0;$i < 8;$i++){ 
//         $code .= $characts[ rand() % strlen($characts) ]; 
//     }
//     return $code;
// }

// //cette fonction vérifie les duplicats
// function checkDuplicate($testcode){
//     global $codegverif;

//     array_push($codegverif, $testcode);
//     //array_count_values permet de savoir combien de fois une valeur apparaît dans la table.
//     $count = array_count_values($codegverif);
//     //on boucle pour savoir si les array count apparaissent plus qu'une fois.
//     foreach ($count as $key => $value) {
//         if($value > 1){
//             //Si oui, on supprime les doublons avec array_unique();
            
//             $codegverif = array_unique($codegverif);
//             // on génère un autre Code aléatoire.
//             $testcode = generateCode();
//             //Puis on recharge la fonction dans laquelle on est, en récursion. On lui donne en paramètre ($testcode) le nombre aléatoire qu'on vient de générer.
//             checkDuplicate($testcode);
//         }
//     }
//     return $testcode;
// };

// //On appelle la fonction une première fois.
// $testcode = generateCode();
// //On crée un code et on vérifie qu'il n'a pas de doubles.
// $newcode = checkDuplicate($testcode);


// //Fonction pour uploader des fichiers.
// if(isset($_FILES['mon_fichier'])) {
//     $_dossier = 'files/';
//     //PHP donne un nom temporaire aux fichiers uploadés; ['tmp_name'].
//     $temp_chemin = $_FILES['mon_fichier']['tmp_name'];
//     // On récupère avec basename, le nom réel du fichier qu'on vient d'uploader.
//     $_fichier = basename($_FILES['mon_fichier']['name']);
//     // On récupère l'extension.
//     $ext = pathinfo($_fichier)['extension'];
//     //On crée un nom de fichier unique avec le code aléatoire généré plus haut et l'extension.
//     $_ourname = $newcode .= ".".$ext;

//     //On fait un test pour voir s'il arrive à déplacer le fichier.
//     if(move_uploaded_file($temp_chemin, $_dossier . $_ourname)){
//         //Si oui, on vérifie que l'utilisateur n'a pas mis de caractères interdits, et on les remplace éventuellement.
//         $nom_fichier = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_fichier);
//         $upload_status = "upload effectué";
//     }
//     // Si non, on remplace la variable du statut de l'upload. Elle est affichée dans la HomeView.php
//     else {
//         $upload_status = "Echec de l'envoi, veuillez réessayer.";
//     }
// };

// $lien = $base_url.$_FILES['mon_fichier']['name'];

// $codeg = pathinfo($_ourname)['filename'];
// $lien = $base_url."files/".$_ourname;
// $zip = new ZipArchive();
// // remplacer temp par le $newcode.zip
// $myzip = $newcode.".zip";
// echo $myzip;
// if ($zip->open($myzip, ZipArchive::CREATE) === TRUE) {
//   if($zip->addFile($lien)){
//     echo "file added";
//   }
//   else{
//     echo "file adding failed";
//   }
    
// // si on a réussi à ajouter le fichier dans l'archive, on le supprime
// //use unlink() to delete old file when zip is moved
// // move zip to files/
//   $zip->close();
//   $ziplink = "files/".$myzip;
//   $downloadlink = $base_url."files/".$myzip;
//   rename($myzip, $ziplink);
// }


// //$ziplink doit correspondre à https://username.promo-24.codeur.online/transferwe/files/zfEijf4e.zip

// // add move zip to download folder
// echo "<a href=".$downloadlink.">cliquez ici pour télécharger l'archive</a>";


// // On donne des noms de varialbes à toutes les variables pour que ce soit plus clair dans le mail.
// $nom_fichier = strip_tags($_fichier);
// $codeg = pathinfo($_ourname)['filename'];
// $lien = $base_url."files/".$codeg;
// $message_envoi = strip_tags($_POST['message']);
// $nom_exped = strip_tags($_POST['nom']);
// $mail_exped = strip_tags($_POST['expediteur']);
// $mail_dest = strip_tags($_POST['destinataire']);
// $subject = iconv("UTF-8", "ISO-8859-1//TRANSLIT", ($nom_exped." vous a transféré un fichier."));
// $expedsubject = iconv("UTF-8", "ISO-8859-1//TRANSLIT", ("Votre transfert LoadXPress a bien été effectué"));

// //On appelle la fonction insertLink (voir Models/Home.php) qui insère le lien du fichier qu'on vient d'uploader dans la BDD.
// $today = date("Y-m-d");
// if(isset($nom_fichier) && !empty($nom_fichier) && isset($codeg) && !empty($codeg)){
//     insertLink($nom_fichier, $codeg, $lien, $today);
// }

// // On envoie deux mails : un pour la personne à qui envoyer le mail, et un autre à l'expéditeur pour la confirmation de l'envoi.
// $header="MIME-Version: 1.0\r\n";
// $header.='From: <lucas@lucasvandenberg.fr>'."\n";
// $header.='Reply-To: <lucas@lucasvandenberg.fr>'."\n";
// $header.='Content-Type:text/html; charset="utf-8"'."\n";
// $header.='Content-Transfer-Encoding: 8bit';

// $message='<!doctype html>
// <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

// <head>
//   <title></title>
//   <!--[if !mso]><!-- -->
//   <meta http-equiv="X-UA-Compatible" content="IE=edge">
//   <!--<![endif]-->
//   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
//   <meta name="viewport" content="width=device-width,initial-scale=1">
//   <style type="text/css">
//     #outlook a {
//       padding: 0;
//     }
//     .ReadMsgBody {
//       width: 100%;
//     }
//     .ExternalClass {
//       width: 100%;
//     }
//     .ExternalClass * {
//       line-height: 100%;
//     }
//     body {
//       margin: 0;
//       padding: 0;
//       -webkit-text-size-adjust: 100%;
//       -ms-text-size-adjust: 100%;
//     }
//     table,
//     td {
//       border-collapse: collapse;
//       mso-table-lspace: 0pt;
//       mso-table-rspace: 0pt;
//     }
//     img {
//       border: 0;
//       height: auto;
//       line-height: 100%;
//       outline: none;
//       text-decoration: none;
//       -ms-interpolation-mode: bicubic;
//     }
//     p {
//       display: block;
//       margin: 13px 0;
//     }
//   </style>
//   <!--[if !mso]><!-->
//   <style type="text/css">
//     @media only screen and (max-width:480px) {
//       @-ms-viewport {
//         width: 320px;
//       }
//       @viewport {
//         width: 320px;
//       }
//     }
//   </style>
//   <!--<![endif]-->
//   <!--[if mso]>
//         <xml>
//         <o:OfficeDocumentSettings>
//           <o:AllowPNG/>
//           <o:PixelsPerInch>96</o:PixelsPerInch>
//         </o:OfficeDocumentSettings>
//         </xml>
//         <![endif]-->
//   <!--[if lte mso 11]>
//         <style type="text/css">
//           .outlook-group-fix { width:100% !important; }
//         </style>
//         <![endif]-->
//   <style type="text/css">
//     @media only screen and (min-width:480px) {
//       .mj-column-per-100 {
//         width: 100% !important;
//         max-width: 100%;
//       }
//       .mj-column-per-50 {
//         width: 50% !important;
//         max-width: 50%;
//       }
//     }
//   </style>
//   <style type="text/css">
//     @media only screen and (max-width:480px) {
//       table.full-width-mobile {
//         width: 100% !important;
//       }
//       td.full-width-mobile {
//         width: auto !important;
//       }
//     }
//   </style>
// </head>

// <body style="background-color:#F4F4F4;">
//   <div style="background-color:#F4F4F4;">
//     <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]-->
//               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="center" style="font-size:0px;padding:25px 25px;word-break:break-word;">
//                       <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
//                         <tbody>
//                           <tr>
//                             <td style="width:400px;"><img height="auto" src="logo.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;"
//                                 width="400"></td>
//                           </tr>
//                         </tbody>
//                       </table>
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:30px;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]-->
//               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="left" style="font-size:0px;padding:10px 25px;padding-top:10px;padding-bottom:10px;word-break:break-word;">
//                       <div style="font-family:Arial, sans-serif;font-size:30px;line-height:22px;text-align:left;color:#55575d;">
//                         <p style="line-height: 30px; margin: 10px 0; text-align: center; color:#151e23; font-size:30p; font-family:Georgia,Helvetica,Arial,sans-serif">'.$nom_exped.' vous a envoyé un fichier</p>
//                       </div>
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:300px;" ><![endif]-->
//               <div class="mj-column-per-50 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:30px;padding-bottom:20px;padding-left:30px;word-break:break-word;">
//                       <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
//                         <tbody>
//                           <tr>
//                             <td style="width:240px;"><img height="auto" src="plume.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;"
//                                 width="240"></td>
//                           </tr>
//                         </tbody>
//                       </table>
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td><td class="" style="vertical-align:top;width:300px;" ><![endif]-->
//               <div class="mj-column-per-50 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="left" style="font-size:0px;padding:10px 25px;padding-top:0px;padding-right:40px;padding-bottom:0px;padding-left:40px;word-break:break-word;">
//                       <div style="font-family:Arial, sans-serif;font-size:13px;line-height:22px;text-align:left;color:#55575d;">
//                         <p style="margin: 10px 0; color:#151e23; font-size:16px; font-family:Georgia,Helvetica,Arial,sans-serif"><b>'.$nom_fichier.'</b></p>
//                         <p style="line-height: 16px; margin: 10px 0;font-size:14px; color:#151e23; font-family:Georgia,Helvetica,Arial,sans-serif; color:#354552">'.$message_envoi.'</p>
//                         <p style="line-height: 16px; margin: 10px 0;font-size:14px; color:#151e23; font-family:Georgia,Helvetica,Arial,sans-serif; color:#354552">-Partager
//                           vos fichiers simplement-<br></p>
//                         <p style="line-height: 16px; margin: 10px 0; color:#354552; font-size:14px; font-family:Georgia,Helvetica,Arial,sans-serif"><a
//                             href="LIENSITE" target="_blank">LOADXPRESS</a> &gt;</p>
//                       </div>
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;padding-top:0px;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]-->
//               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="center" vertical-align="middle" style="font-size:0px;padding:10px 25px;word-break:break-word;">
//                       <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:separate;line-height:100%;">
//                         <tr>
//                           <td align="center" bgcolor="#354552" role="presentation" style="border:none;border-radius:3px;cursor:auto;padding:10px 25px;background:#354552;"
//                             valign="middle">
//                             <p style="background:#354552;color:#ffffff;font-family:Georgia, Helvetica, Arial, sans-serif;font-size:14px;font-weight:normal;line-height:120%;Margin:0;text-decoration:none;text-transform:none;">
//                             <a href="'.$base_url.'Fichier/'.$codeg.'" target="_blank">Récupérer vos fichiers</a></p>
//                           </td>
//                         </tr>
//                       </table>
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><table align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600" ><tr><td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;"><![endif]-->
//     <div style="background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;">
//       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
//         <tbody>
//           <tr>
//             <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
//               <!--[if mso | IE]><table role="presentation" border="0" cellpadding="0" cellspacing="0"><tr><td class="" style="vertical-align:top;width:600px;" ><![endif]-->
//               <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//                 <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//                   <tr>
//                     <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
//                       <!--[if mso | IE]><table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" ><tr><td><![endif]-->
//                       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
//                         <tr>
//                           <td style="padding:4px;">
//                             <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#3b5998;border-radius:3px;width:20px;">
//                               <tr>
//                                 <td style="font-size:0;height:20px;vertical-align:middle;width:20px;"><a href="https://www.facebook.com/sharer/sharer.php?u=[[SHORT_PERMALINK]]"
//                                     target="_blank"><img height="20" src="https://www.mailjet.com/images/theme/v1/icons/ico-social/facebook.png"
//                                       style="border-radius:3px;" width="20"></a></td>
//                               </tr>
//                             </table>
//                           </td>
//                         </tr>
//                       </table>
//                       <!--[if mso | IE]></td><td><![endif]-->
//                       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
//                         <tr>
//                           <td style="padding:4px;">
//                             <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#bd081c;border-radius:3px;width:20px;">
//                               <tr>
//                                 <td style="font-size:0;height:20px;vertical-align:middle;width:20px;"><a href="https://pinterest.com/pin/create/button/?url=[[SHORT_PERMALINK]]&media=&description="
//                                     target="_blank"><img height="20" src="https://www.mailjet.com/images/theme/v1/icons/ico-social/pinterest.png"
//                                       style="border-radius:3px;" width="20"></a></td>
//                               </tr>
//                             </table>
//                           </td>
//                         </tr>
//                       </table>
//                       <!--[if mso | IE]></td><td><![endif]-->
//                       <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
//                         <tr>
//                           <td style="padding:4px;">
//                             <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#3f729b;border-radius:3px;width:20px;">
//                               <tr>
//                                 <td style="font-size:0;height:20px;vertical-align:middle;width:20px;"><a href="[[SHORT_PERMALINK]]"
//                                     target="_blank"><img height="20" src="https://www.mailjet.com/images/theme/v1/icons/ico-social/instagram.png"
//                                       style="border-radius:3px;" width="20"></a></td>
//                               </tr>
//                             </table>
//                           </td>
//                         </tr>
//                       </table>
//                       <!--[if mso | IE]></td></tr></table><![endif]-->
//                     </td>
//                   </tr>
//                 </table>
//               </div>
//               <!--[if mso | IE]></td></tr></table><![endif]-->
//             </td>
//           </tr>
//         </tbody>
//       </table>
//     </div>
//     <!--[if mso | IE]></td></tr></table><![endif]-->
//   </div>
// </body>
// </html>';

// mail($mail_dest, $subject, $message, $header);
// mail($mail_exped, $expedsubject, iconv("UTF-8", "ISO-8859-1//TRANSLIT", ("le fichier ".$nom_fichier." a bien été transféré. Lien : ".$lien)));

// $onelink = getOneLink("https://www.lucasvandenberg.fr/transferwe/files/AgkY3NoN.php");
// foreach ($onelink as $value) {
//     $oui = $value['lien'];
// }

// echo "<a title='".$oui."' href='".$oui."'>Exemple de lien que l'on peut afficher</a>";

include('Views/HomeView.php');