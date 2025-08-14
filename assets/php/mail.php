<?php

/**
* 邮件发送
* @param $to 接收人
* @param string $subject 邮件标题
* @param string $content 邮件内容(html模板渲染后的内容)
* @throws Exception
* @throws phpmailerException
*/
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


function send_email($to="",$subject='',$content=NULL){
    // 引入PHPMailer的核心文件
    require_once(dirname(dirname(__FILE__))."/PHPMailer/PHPMailer.php"); //这里的三个文件应填入你的PHPMailer放置目录
    require_once(dirname(dirname(__FILE__))."/PHPMailer/Exception.php"); //这里的三个文件应填入你的PHPMailer放置目录
    require_once(dirname(dirname(__FILE__))."/PHPMailer/SMTP.php"); 
    
    $config = include 'config.php';
    //初始化邮箱配置信息---在Config.php文件中进行配置
    $mailUsername = $config['mailUsername']; //这里应
    $mailPassword = $config['mailPassword'];
    $mailFromName = $config['mailFromName'];
    $mailHost = $config['mailHost'];
    $mailPort = $config['mailPort'];
    
    // 实例化PHPMailer核心类
    $mail = new PHPMailer(true);

    try {
           // 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
           // 开启debug调试模式在报错时会给出更多错误信息，数值越高信息越详细
          //Enable SMTP debugging
          // 0 = off (for production use)
          // 1 = client messages
          // 2 = client and server messages
        //   $mail->SMTPDebug = 2;
          //调试输出格式
          //$mail->Debugoutput = 'html';

          //客户端配置---Server settings
          $mail->isSMTP(); // 使用smtp鉴权方式发送邮件
          $mail->SMTPAuth = true; // smtp需要鉴权 这个必须是true
          $mail->Host = $mailHost; // 链接邮箱的服务器地址
          $mail->Username = $mailUsername; // smtp登录的账号，163邮箱与QQ邮箱均可
          $mail->Password = $mailPassword; // smtp登录的密码，此处应邮箱账号开启SMTP服务生成的授权码
          $mail->SMTPSecure = 'tls'; // 设置使用ssl加密方式登录鉴权
          $mail->Port = $mailPort; // 设置ssl连接smtp服务器的远程服务器端口号
          $mail->CharSet = 'UTF-8'; // 设置发送的邮件的编码

          //邮件账户设置---Recipients
          $mail->setFrom($mailUsername, $mailFromName); // 设置发件人邮箱地址与昵称
          $mail->addReplyTo($mailUsername, ['Information']); // 设置回复时的用户与昵称，应与发件人相同 
          $mail->addCC($mailUsername, $mailFromName);
          // $mail->addCC($to, $mailFromName);

          // 设置收件人邮箱地址
          // $mail->addAddress('joe@example.net', ['Joe User']); // 收件人配置示例，昵称配置可选
          // 有多个收件人时添加多个收件人，效果等同于多个$mail->addAddress()
          if(is_array($to))
          {
              foreach($to as $v)
              {
                  $mail->addAddress($v, $v);
              }
          }else{
              $mail->addAddress($to, $to);
          }
        //   $mail->addAddress('1261717268@qq.com');

          //邮件内容---Content
          $mail->isHTML(true); // 邮件正文是否为html编码
          $mail->Subject = $subject; // 所要发送邮件的主题
          $mail->SingleTo = true;


          if(is_array($content))
          {
              $allcontent = implode('<br>', $content);  // 将一维数组以<br>分隔组合成一个字符串
              $mail->Body = $allcontent;
          }else{
              $mail->Body = $content;
          }
          
          //附加信息，可以省略
          //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
          
          //附件
          //$mail->addAttachment('./example.pdf');  // 若需要发送附件就取消此条注释，将路径改为需要发送文件的路径。
          
          // 发送邮件 返回状态
          if ($mail->Send()) {  
            // echo 'Message has been sent.';  
        } else {  
            // echo "Mailer Error: " . $mail->ErrorInfo;   
        }
          $mail->clearAddresses();
          $mail->ClearAllRecipients();
          $mail->clearAttachments();
        } catch (Exception $e) {
        //   echo "<br>Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
