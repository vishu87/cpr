<?php

class GeneralController extends BaseController {
    
    public function faq(){
        $main = View::make('faq');
        return View::make('main',["title"=>"Frequently asked questions","description"=>"Get any questions regarding the Corperlife website answered here. Corpers, login to the dashboard to get NYSC related questions answered.","keywords"=>"Questions, answers, corperlife FAQ","main"=>$main]);
    }

    public function faqsubmit(){
        $cre = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'question' => Input::get('question')
        ];
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::get('antispam') == ''){

                require app_path().'/mail.php';
                require app_path().'/libraries/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail_text = new Mail;
                $mail->isMail();
                $mail->setFrom('info@corperlife.com', 'Corper Life');
                $mail->addAddress('questions@corperlife.com');
                $mail->isHTML(true);
                $mail->Subject = "FAQ Question | Corper Life";
                $mail->Body = $mail_text->faq_question(Input::get("name"),Input::get("email"), Input::get("question"));
                if(!$mail->send()) {
                    return 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    return Redirect::Back()->with('success','Your question has been submitted. We will respond to it asap.');                
                }
            }
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function postSaveadd(){
        $cre = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),         
            'enquiry' => Input::get('enquiry'),       
            'message' => Input::get('message')       
        ];
        $rules = [
            'name' => 'required',
            'email' => 'required|email',   
            'enquiry' => 'required|not_in:0',
            'message' => 'required'
        ];
        $validator = Validator::make($cre,$rules);

        if($validator->passes()){
            require app_path().'/mail.php';
            require app_path().'/libraries/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail_text = new Mail;
            $mail->isMail();
            $mail->setFrom('info@corperlife.com', 'Corper Life');
            $mail->addAddress('questions@corperlife.com');
            $mail->addAddress('vishu.iitd@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = "Advertisement Request | Corper Life";
            $mail->Body = $mail_text->advert(Input::get("name"),Input::get("email"), Input::get("enquiry"), Input::get("phone"), Input::get("message"));
            if(!$mail->send()) {
                return Redirect::Back()->with('failure', 'Mailer Error: ' . $mail->ErrorInfo);
            } else {
                return Redirect::Back()->with('success','Your enquiry has been submitted. We will respond to it asap.');
            }
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}